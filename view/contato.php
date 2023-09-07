<?php include_once("header.php");
?>
<link rel="stylesheet" href="../css/contato.css">


	<section>
		<div id="banner"><img src="../img/biscoitobanner.jpg" alt="banner Biscoito" width="100%">
			<h1>Biscoiteiras 
				<small>Vem biscoitar também</small>
			</h1>
		</div>
	</section>


	<body>

		<div class="container">
			<h2>Entre em contato</h2>
		</div>

		<div class="container">
			<div class="row">
				<div class="col col-formulario">
					<h3>Todos os campos são obrigatórios</h3>
					<p><small> Possui alguma dúvida referente à nossa plataforma? Entre em contato com a gente pelo formulário abaixo. Responderemos o mais rápido possível.</small></p>
					<br><br>
				</div>
			
				
				<form method="post">
					<div class="form-row">
						<div class="col">	
							<input type="text" class="form-control" id="NomeDaPessoa" placeholder="Nome">
						</div> 
						
						<div class="col">
							<input type="text" class="form-control" id="SobrenomeDaPessoa" placeholder="Sobrenome">
						</div>
				
						<div class="col">
						<input type="email" class="form-control" id="EmailDaPessoa" placeholder="Email">
						</div>


						<select id="SexoDaPessoa" class="form-control">
							<option selected>Gênero</option>
							<option>Feminino</option>
							<option>Masculino</option>
							<option>Não-binário</option>
						</select>

						<div class="form-group">
							<label for="MensagemDaPessoa">Mensagem</label>
							<textarea class="form-control" id="MensagemDaPessoa" rows="7"></textarea>
						</div>




						<fieldset class="form-group">
							<div class="row">
								<div class="form-check">
								<input class="form-check-input" type="radio" name="ClienteDaPlataforma" id="ClienteDaPlataforma" value="opcao1" checked>
									<label class="form-check-label" for ="ClienteDaPlataforma">
									Sou usuário da plataforma
									</label>
								</div>
						
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ClienteDaPlataforma" id="NaoSouCliente" value="opcao2">
									<label class="form-check-label" for="NaoSouCliente">
									Não sou usuário da plataforma
									</label>
								</div>
							</div>
						</fieldset>

				
						<button type="submit" class="btn btn-primary">Enviar</button>





					</div>
				</form>








				<div class="col col-clientes">
					<h3>Nossos clientes</h3>
					
					<img src="../img/ocara.jpg" alt="thisman" height="150px" width="150px"><p>"Biscoitos tão deliciosos que eu até sonho com eles" - Mr. Sandman</p>
					

					<img src="../img/aveia.jpg" alt="thisgranny" height="150px" width="150px"><p>"Minha forma preferida de consumi-los é na banheira ao som de Sweet Dreams" - Mrs. Cabot</p>
					
				</div>
			</div>


		</div>




		</div>


	</body>
	
<?php include_once("footer.php");
?>

