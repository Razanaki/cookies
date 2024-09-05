<?php
date_default_timezone_set("Asia/Tokyo");

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


$emailusuario = !empty($_POST['email']) ? $_POST['email'] : '';
$emailcaseinsensitive =  mb_strtolower($emailusuario,"UTF-8");

$checaemail = "SELECT COUNT(*) AS totalemail FROM USUARIO WHERE CASEINSENSITIVEEMAIL = ?";
$emailExiste = $pdo->prepare($checaemail);
$emailExiste->execute([$emailcaseinsensitive]);
$emailResult = $emailExiste->fetchColumn();

$url = bin2hex(random_bytes(32));
$hora = date("h:i:sa");


if ($emailResult < 1) {
	include_once '..\view\esqueceusenha.php';

	 echo '<script type="text/javascript">
		window.onload = function () {alert("Erro: O email não existe.")}
	 </script>';

    }else {

        $update = "UPDATE usuario SET (token, horatoken) values (?, ?) where caseinsensitiveemail = $emailcaseinsensitive";
        $updateResultado = $pdo->query($update);


    }


$conn->close();