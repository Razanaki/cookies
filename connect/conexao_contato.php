<?php include_once("../view/contato.php");



		$conn = mysqli_connect("localhost", "root", "", "bixcoito");

			if ($conn === false) {
				echo ("Erro: não conectou. "
					. mysqli_connect_error());
			}

			$host = 'localhost';
			$dbname = 'bixcoito'; 
			$username = 'root'; 
			$password = ''; 
			$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

			
			$NomeDaPessoa =  !empty($_POST['nome']) ? $_POST['nome'] : '';
			$SobrenomeDaPessoa =  !empty($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
			$EmailDaPessoa =  !empty($_POST['email']) ? $_POST['email'] : '';
			$GeneroDaPessoa =  !empty($_POST['genero']) ? $_POST['genero'] : '';
			$MensagemDaPessoa =  !empty($_POST['mensagem']) ? $_POST['mensagem'] : '';
			$ClienteDaPlataforma =  !empty($_POST['ClienteDaPlataforma']) ? $_POST['ClienteDaPlataforma'] : '';


			$sql = "INSERT INTO contato (nome, sobrenome, email, genero, mensagem, ClienteDaPlataforma) values (?, ?, ?, ?, ?, ?)";
			$stmt = $pdo->prepare($sql);
			$stmt->execute([$NomeDaPessoa, $SobrenomeDaPessoa, $EmailDaPessoa, $GeneroDaPessoa, $MensagemDaPessoa, $ClienteDaPlataforma]);
			mysqli_close($conn);

	echo '<script>alert("Mensagem enviada com sucesso. Retornaremos em breve.")</script>';


?>