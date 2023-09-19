<?php include_once("header.php");
 ?>
<link rel="stylesheet" href="../css/logincadastro.css">

	<section>
		<div id="banner"><img src="../img/biscoitobanner.jpg" alt="banner Biscoito" width="100%">
			<h1>Biscoiteiras
				<small>Vem biscoitar também</small>
			</h1>
		</div>
	</section>

	<body>	
		<div id="entrarcadastrar">
			<div class="container">

				<div class="row">
					<div class="col col-usuario">
						<h3> Entrar com usuário </h3>
							<label for="usuariologin">Usuário: </label>
							<input type="text" class="form-control" name="usuario" id="usuariologin">
							<label for="senhalogin">Senha: </label>
							<input type="password" class="form-control" name="senha" id="senhalogin">
							<button type="submit" class="btn btn-primary"> Entrar </button>
					</div>
				
			
					<div class="col col-cadastro">
						<h3> Criar uma conta </h3>
							<label for="emaillogin">E-mail</label>
							<input type="email" class="form-control" name="email" id="emaillogin" autocomplete="on">
							<button type="submit" class="btn btn-primary"> Cadastrar </button>
					</div>
				</div>

			</div>
		</div>
	</body>


<?php include_once("footer.php");

?>