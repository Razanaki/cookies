<?php
date_default_timezone_set("Asia/Tokyo");
include_once('..\view\header.php');



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
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$emailusuario = !empty($_POST['email']) ? $_POST['email'] : '';
$emailcaseinsensitive =  mb_strtolower($emailusuario,"UTF-8");

$checaemail = "SELECT COUNT(*) AS totalemail FROM USUARIO WHERE CASEINSENSITIVEEMAIL = ?";
$emailExiste = $pdo->prepare($checaemail);
$emailExiste->execute([$emailcaseinsensitive]);
$emailResult = $emailExiste->fetchColumn();

$url = bin2hex(random_bytes(32));
$hora = date('d-m-y h:i:s');

$link = "http://localhost/cookies/view/redefinesenha.php?token=" . $url;


if ($emailResult < 1) {
	include_once '..\view\esqueceusenha.php';

	 echo '<script type="text/javascript">
		window.onload = function () {alert("Erro: O email não existe.")}
	 </script>';

    }else {

        $update = "UPDATE usuario SET token = '$url', horatoken = '$hora' where caseinsensitiveemail = ('$emailcaseinsensitive')";
        $updateResultado = $pdo->query($update);
  



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
        $mail->Subject = 'Redefinição de senha';
        $mail->Body    = "

        Olá  <br> <br>

        Recebemos uma solicitação para redefinir a senha da sua conta. <br>  <br>

        Para redefinir sua senha, clique no link abaixo: <br> 

        $link

        <br> 
        Este link será válido por 24hrs. Após esse período, você precisará solicitar um novo link de redefinição.

        Se tiver alguma dúvida ou precisar de ajuda, entre em contato com o nosso suporte através do email 'biscoiteiras.suporte@gmail.com'. <br> <br>
        Se você não solicitou a redefinição, por favor, ignore esta mensagem. <br> <br>

        Atenciosamente, <br>
        Equipe Biscoiteira
        ";
        $mail->send();


       
    }

$conn->close();

?>

<link rel="stylesheet" href="../css/redefinicaosenha.css">

    
    <div class="titulo">
        <h1> Email enviado com sucesso. </h1>
    </div>


<body>
    <div class="text">
     Foi enviado um e-mail para redefinição de senha para o email informado. Verifique seu email, e caso não encontrar, verifique na caixa de spam. <br>
    
    </div>
</body>


<?php include_once('..\view\footer.php');
?>
