<?php include_once("header.php");
include("..\connect\conexao_login.php");

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
	<div class="container">
		<form id="form-usuario" form action="../connect/conexao_login.php" method="post">
	
					
						<div class="col col-usuario">
							<h3> Entrar com usuário </h3>

								<div class="col-user">
									<label for="usuariologin">Usuário: </label>
									<input type="text" class="form-control" name="usuariologin" id="usuariologin" required>
								</div> 

								<div class="col-password">
									<label for="senhalogin">Senha: </label>
									<input type="password" class="form-control" name="senhalogin" id="senhalogin" required>
								</div>

								<div class="col-botao">
									<button type="submit" class="btn btn-primary" id="botaousuario"> Entrar </button>
								</div>
						</div>
				
				
			
		</form>		
		
		<form id="form-cadastro" action="cadastro.php" method="POST">
			<div id="cadastrar">
				<div class="row">
					<div class="col col-cadastro">
						<h3> Criar nova conta </h3>
							<div class="col-email">
								<label for="emaillogin">E-mail: </label>
								<input type="email" class="form-control" name="email" id="emaillogin" autocomplete="on" required>
							</div>

							<div class="col-botao">
								<button type="submit" class="btn btn-primary" onclick="document.location='cadastro.php'"> Cadastrar </button>
							</div>
					
					</div>
				</div>
			</div>		
		</form>
	</div>
	
</body>


<?php include_once("footer.php");






?>