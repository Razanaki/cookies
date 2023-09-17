<?php include_once("../view/contato.php");



	$conn = mysqli_connect("localhost", "root", "", "bixcoito");

		if ($conn === false) {
			echo ("Erro: não conectou. "
				. mysqli_connect_error());
		}


		$NomeDaPessoa = mysqli_real_escape_string($conn, $_POST['nome']);
		$SobrenomeDaPessoa = $_POST['sobrenome'];
		$EmailDaPessoa = $_POST['email'];
		$GeneroDaPessoa = $_POST['genero'];
		$MensagemDaPessoa = $_POST['mensagem'];
		$ClienteDaPlataforma = $_POST['ClienteDaPlataforma'];


		$sql = "INSERT INTO contato (nome, sobrenome, email, genero, mensagem, usuario) values ('$NomeDaPessoa', '$SobrenomeDaPessoa', '$EmailDaPessoa', '$GeneroDaPessoa', '$MensagemDaPessoa', '$ClienteDaPlataforma')";

		mysqli_query($conn, $sql);
echo '<script>alert("Mensagem enviada com sucesso. Retornaremos em breve.")</script>';
	mysqli_close($conn);


  
?>