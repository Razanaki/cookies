<?php

$host = 'localhost';
$dbname = 'bixcoito'; 
$username = 'root'; 
$password = ''; 
$pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['usuariologin'], $_POST['senhalogin'])) {

        $usuariologin = mb_strtolower($_POST['usuariologin'], "UTF-8");
        $senhalogin = $_POST['senhalogin'];
		$senhausuario_hash = password_hash($senhalogin, PASSWORD_DEFAULT);

    
        $checausuario = "SELECT CASEINSENSITIVE FROM USUARIO WHERE CASEINSENSITIVE = ?";
        $usuarioExiste = $pdo->prepare($checausuario);
        $usuarioExiste->execute([$usuariologin]);
        $usuarioResult = $usuarioExiste->fetchColumn();

        $senhacorreta = "SELECT senha FROM USUARIO WHERE CASEINSENSITIVE = ?";
        $senhaExiste = $pdo->prepare($senhacorreta);
        $senhaExiste->execute([$usuariologin]);
        $senhaResult = $senhaExiste->fetchColumn();

   

   
            if ($usuariologin == $usuarioResult ) {
                echo "Usuário existe<br>"; 
                echo "O usuário é " . $usuarioResult;
            
                        if ((password_verify($senhalogin, $senhaResult)) == 1){
                        echo "<br>Senha correta!";
                        echo "<br>A senha correta é " . $senhaResult ;
                        echo "<br>A senha fornecida no login é " . $senhausuario_hash ;
                        }
                                if ((password_verify($senhalogin, $senhaResult)) != 1) {
                                    echo "<br>Senha incorreta!";
                                    echo "<br>A senha correta é " . $senhaResult ;
                                    echo "<br>A senha fornecida no login é " . $senhausuario_hash ;
                                }

                
                    
            } else  {
                echo 'Usuário não existe';
                echo "<br>Usuário inserido: " .  $usuariologin ;
            }
        }
    }