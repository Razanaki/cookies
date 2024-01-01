<?php 
include_once("../view/header.php");	 
?>

<?php

    $token = $_GET['token'];
    echo "$token \n";
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


    $checatoken = "SELECT COUNT(*) AS resultadotoken FROM USUARIO WHERE USUARIO_HASH = ?";
    $tokenExiste = $pdo->prepare($checatoken);
    $tokenExiste->execute([$token]);
    $tokenResult = $tokenExiste->fetchColumn();

    

    if ($tokenResult <> 0) {
   
        $alterastatus = "UPDATE usuario SET statusconta = 1 WHERE usuario_hash = '$token'";
        $updateResultado = $pdo->query($alterastatus);

    
            echo('Deu certo sua puta');
        
    } else {
        echo " Token inválido ou expirado.";
    }

    $conn->close();

?>




<?php 
include_once("../view/footer.php");

?>