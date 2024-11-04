<link rel="stylesheet" href="../css/redefinesenha.css">
<?php include_once("header.php");
date_default_timezone_set("Asia/Tokyo");


$host = 'localhost';
$dbname = 'bixcoito'; 
$username = 'root'; 
$password = ''; 
$token = $_GET['token'];

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$checaHora = "SELECT COUNT(*) AS resultadotoken FROM USUARIO WHERE USUARIO_HASH = ?";
$horaExiste = $pdo->prepare($checaHora);
$horaExiste->execute([$token]);
$horaResult = $horaExiste->fetchColumn();

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$host = 'localhost';
$dbname = 'bixcoito'; 
$username = 'root'; 
$password = ''; 


$horarioAtual = date('d-m-y h:i:s');

$Teste1 = ($horaResult);
$Teste2 = ($horarioAtual);
$Teste3 = $Teste1->diff($Teste2);



echo $Teste3->format('%R%a');



?>








<header> <h1>Redefinir senha</h1>


</header>


<body> 

</body>






<?php include_once("footer.php");
?>