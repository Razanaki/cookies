<?php 
include_once("../view/header.php");	 
?>

<?php

    $token = $_GET['token'];

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

        header('Location: ../view/confirmacao_sucesso.php');
      
        
    } else {
        header('Location: ../view/confirmacao_falhou.php');
    }

    $conn->close();

?>




<?php 
include_once("../view/footer.php");

?>