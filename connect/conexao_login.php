<?php

$host = 'localhost';
$dbname = 'bixcoito'; 
$username = 'root'; 
$password = ''; 
$pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable error reporting

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if 'usuariologin' and 'senhalogin' keys exist in $_POST array
    if (isset($_POST['usuariologin'], $_POST['senhalogin'])) {

        $usuariologin = $_POST['usuariologin'];
        $senhalogin = $_POST['senhalogin'];
		$senhausuario_hash = password_hash($senhalogin, PASSWORD_DEFAULT);

        $checausuario = "SELECT COUNT(*) AS usuarioexiste FROM USUARIO WHERE USUARIO = ?";
        $usuarioExiste = $pdo->prepare($checausuario);
        $usuarioExiste->execute([$usuariologin]);
        $usuarioResult = $usuarioExiste->fetchColumn();

        $senhacorreta = "SELECT senha FROM USUARIO WHERE usuario = ?";
        $senhaExiste = $pdo->prepare($senhacorreta);
        $senhaExiste->execute([$usuariologin]);
        $senhaResult = $senhaExiste->fetchColumn();

 
        try {
            if ($usuarioResult == 1) {
                echo "Usuário existe<br>"; 
                echo "O usuário é " . $usuarioResult;
            
                        if ((password_verify($senhalogin, $senhaResult)) > 0){
                        echo "<br>Senha correta!";
                        echo "<br>A senha correta é " . $senhaResult ;
                        echo "<br>A senha fornecida no login é " . $senhausuario_hash ;
                        }
                                if ((password_verify($senhalogin, $senhaResult)) < 1) {
                                    echo "<br>Senha incorreta!";
                                    echo "<br>A senha correta é " . $senhaResult ;
                                    echo "<br>A senha fornecida no login é " . $senhausuario_hash ;
                                }

                
                    
            } else if($usuarioResult == 0) {
                echo 'Usuário não existe';
   
            }
        
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        
        echo "Insira um usuário e senha existente.";
    }
}

