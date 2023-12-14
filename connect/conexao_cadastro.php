<?php 

	$conn = mysqli_connect("localhost", "root", "", "bixcoito");
		if ($conn === false) {
			echo("Erro: não conectou."
				. mysqli_connect_error());
		}



		$host = 'localhost';
		$dbname = 'bixcoito'; 
		$username = 'root'; 
		$password = ''; 
		$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

		$botao = ['botao'];
		$emailinvalido = ['emailinvalido'];
		$emailexiste = ['emailexiste'];
	
		
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
	echo "Erro: O email já está em uso. Por favor, escolha outro email.";

	echo '<script type="text/javascript">
	window.onload = function () {alert("Erro: O email já está em uso. Por favor, escolha outro email.")}
 </script>';

} else {

    try {
        $sql = "INSERT INTO usuario (usuario, nome, sobrenome, email, genero, senha) values (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$contausuario, $nomeusuario, $sobrenomeusuario, $emailusuario, $generousuario, $senhausuario_hash]);
        echo "Inserção bem-sucedida!";
		} 
		catch (PDOException $e) {
    		echo "Erro ao inserir no banco de dados: " . $e->getMessage();
		}
}
	

		echo "'$emailusuario', '$contausuario', '$nomeusuario', '$sobrenomeusuario', '$generousuario', '$senhausuario', '$senhausuario_hash'";



mysqli_close($conn);

?>

