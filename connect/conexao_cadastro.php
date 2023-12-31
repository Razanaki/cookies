<?php 

	$conn = mysqli_connect("localhost", "root", "", "bixcoito");
		if ($conn === false) {
			echo("Erro: não conectou."
				. mysqli_connect_error());
		}

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
		use PHPMailer\PHPMailer\SMTP;
		
        require '..\PHPMailer\src\Exception.php';
        require '..\PHPMailer\src\PHPMailer.php';
        require '..\PHPMailer\src\SMTP.php';

        

		$host = 'localhost';
		$dbname = 'bixcoito'; 
		$username = 'root'; 
		$password = ''; 
		$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

		
		$contausuario = !empty($_POST['contausuario']) ? $_POST['contausuario'] : '';
		$nomeusuario = !empty($_POST['nomeusuario']) ? $_POST['nomeusuario'] : '';
		$sobrenomeusuario = !empty($_POST['sobrenomeusuario']) ? $_POST['sobrenomeusuario'] : '';
		$emailusuario = !empty($_POST['emailusuario']) ? $_POST['emailusuario'] : '';
		$generousuario = !empty($_POST['genero']) ? $_POST['genero'] : '';

		$senhausuario = !empty($_POST['senhausuario']) ? $_POST['senhausuario'] : '';
		$senhausuario_hash = password_hash($senhausuario, PASSWORD_DEFAULT);



		$checausuario = "SELECT COUNT(*) AS totalusuario FROM USUARIO WHERE USUARIO = ?";
		$usuarioExiste = $pdo->prepare($checausuario);
		$usuarioExiste->execute([$contausuario]);
		$usuarioResult = $usuarioExiste->fetchColumn();

		$checaemail = "SELECT COUNT(*) AS totalemail FROM USUARIO WHERE EMAIL = ?";
		$emailExiste = $pdo->prepare($checaemail);
		$emailExiste->execute([$emailusuario]);
		$emailResult = $emailExiste->fetchColumn();




if ($usuarioResult > 0) {
	include_once '..\view\cadastro.php';

	 echo '<script type="text/javascript">
		window.onload = function () {alert("Erro: O usuário já existe. Escolha outro nome de usuário.")}
	 </script>';


} elseif ($emailResult > 0) {
		include_once '..\view\cadastro.php';

	echo '<script type="text/javascript">
	window.onload = function () {alert("Erro: O email já está em uso. Por favor, escolha outro email.")}
 </script>';

} else {

    try {
        $sql = "INSERT INTO usuario (usuario, nome, sobrenome, email, genero, senha) values (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$contausuario, $nomeusuario, $sobrenomeusuario, $emailusuario, $generousuario, $senhausuario_hash]);

		try {
			$mail = new PHPMailer(true);
	          
			$mail->isSMTP();                                       
			$mail->Host       = 'smtp.gmail.com';               
			$mail->SMTPAuth   = true;                              
			$mail->Username   = 'biscoiteiras.suporte@gmail.com';                   
			$mail->Password   = 'nkpv tlsp xmdt hxzf';                             
			$mail->SMTPSecure = 'ssl';       
			$mail->Port       = 465;                                  

			$mail->setFrom('biscoiteiras.suporte@gmail.com', 'O Portal das Biscoiteiras');
			$mail->addAddress($emailusuario, $username);   
			$mail->addReplyTo('biscoiteiras.suporte@gmail.com', 'Suporte das Biscoiteiras');

			$mail->CharSet = "UTF-8";
			$mail->WordWrap = 50;  


			$mail->isHTML(true);                                
			$mail->Subject = 'Cadastro realizado com sucesso!';
			$mail->Body    = "

			Olá $contausuario  <br> <br>

			Obrigado por se cadastrar em nosso sistema! Para garantir que receba nossas atualizações e informações importantes, por favor, confirme seu endereço de e-mail clicando no link abaixo: <br> 

			[Link de confirmação]

			<br> <br>
			Se você não realizou este cadastro, por favor, desconsidere este e-mail. <br> 

			Estamos empolgados em tê-lo(a) como parte da nossa comunidade! Se precisar de alguma assistência, não hesite em nos contatar. <br> <br>

			Atenciosamente, <br> 

			A Equipe Biscoiteira

			";
			$mail->send();
			}
			catch  (Exception $e) {
				echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}

		} 
		catch (PDOException $e) {
    		echo "Erro ao inserir no banco de dados: " . $e->getMessage();
		}
}
	
		include_once '..\view\confirmacaocadastro.php';
		



mysqli_close($conn);

?>
