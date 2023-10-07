<?php 

	$conn = mysqli_connect("localhost", "root", "", "bixcoito");
		if ($conn === false) {
			echo("Erro: não conectou."
				. mysqli_connect_error());
		}

		$contausuario = !empty($_POST['contausuario']) ? $_POST['contausuario'] : '';
		$nomeusuario = !empty($_POST['nomeusuario']) ? $_POST['nomeusuario'] : '';
		$sobrenomeusuario = !empty($_POST['sobrenomeusuario']) ? $_POST['sobrenomeusuario'] : '';
		$emailusuario = !empty($_POST['emailusuario']) ? $_POST['emailusuario'] : '';
		$generousuario = !empty($_POST['genero']) ? $_POST['genero'] : '';
		$senhausuario = !empty($_POST['senhausuario']) ? $_POST['senhausuario'] : '';

		$sql = "INSERT INTO usuario (usuario, nome, sobrenome, email, genero, senha) values ('$contausuario', '$nomeusuario', '$sobrenomeusuario', '$emailusuario', '$generousuario', '$senhausuario')";

		mysqli_query($conn, $sql);
		echo "'$emailusuario', '$contausuario', '$nomeusuario', '$sobrenomeusuario', '$generousuario', '$senhausuario'";
		mysqli_close($conn);



		
?>