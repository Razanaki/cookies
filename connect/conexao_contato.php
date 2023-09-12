<?php 

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

	if (mysqli_query($conn, $sql)){
		echo "<p> Dados armazenados com sucesso. <p>";
			
		echo("\n$NomeDaPessoa\n $SobrenomeDaPessoa\n $EmailDaPessoa\n $GeneroDaPessoa\n $MensagemDaPessoa\n $ClienteDaPlataforma");
	}	
		else {
			echo "<p> Erro: dados não foram armazenados. </p>"
			. mysqli_error($conn);
		}
mysqli_close($conn);


?>