
<link rel="stylesheet" href="../css/cadastro.css">
<?php 
include_once("header.php");	
?>
		<script src="../js/validacoes_cadastro.js"></script>
<body>

	<form action="../connect/conexao_cadastro.php" method="post" onpageshow="SenhaEConfirmacao()">
		
			<h3> Cadastro </h3>
		<form class="form-group">

			<div class="lugardoemail">	
		    <label for="emailusuario">Email address:</label>
		    <input type="email" class="form-control" name="emailusuario" id="emailusuario" placeholder="nome@exemplo.com" autocomplete="on" onblur="Email()" required> <br> </br>
			<small id="emailinvalido" style="display:none">O email inserido não é valido.</small>
			</div>

			<div class="lugardaconta">
			<label for="contausuario">Usuário:</label>
			<input type="text" class="form-control" name="contausuario" onblur="Usuario()" id="contausuario" required> <br> </br>
			<small id="usuarioinvalido" style="display:none">Insira um usuário.</small>
			<small id="usuarioexiste" style="display:none">Usuário já existe.</small>
			</div>

			<div class="lugardonome">
			<label for="nomeusuario">Nome:</label>
			<input type="text" class="form-control" name="nomeusuario" id="nomeusuario" onblur="Nome()" required> <br> </br>
			<small id="nomeinvalido" style="display:none">Insira um nome.</small>
			</div>

			<div class="lugardosobrenome">
			<label for="sobrenomeusuario">Sobrenome:</label>
			<input type="text" class="form-control" name="sobrenomeusuario" id="sobrenomeusuario" onblur="Sobrenome()" required> <br> </br>
			<small id="sobrenomeinvalido" style="display:none">Insira um sobrenome.</small>
			</div>

			<div class="lugardogenero">
				<label for="generousuario">Gênero: </label>
						<select id="generousuario" name="genero" class="form-control" placeholder="Gênero" onblur="Genero()" required >
							<option selected></option>
							<option>Feminino</option>
							<option>Masculino</option>
							<option>Não-binário</option>
						</select> <br> </br>
						<small id="insiragenero" style="display:none">Por favor inserior um gênero válido. </small>
			</div>		

			<div class="lugardasenha">
				<label for="senhausuario">Senha:</label>
				<input type="password" class="form-control" id="senhausuario" name="senhausuario" minlength="8" maxlength="20" onblur="Senha()" required> <br> </br>
				<small id="senhainvalida"> A senha deve ter de 8 a 20 caracteres, uma letra maiúscula, um caractere especial e número.</small> <br> </br>
			</div>

	
			<div class="lugardaconfirmacao">
				<label for="confirmacaosenha">Confirme sua senha:</label>
				<input type="password" class="form-control" id="confirmacaosenha" name="confirmacaosenha"  minlength="8" maxlength="20" onblur="ConfirmacaoSenha()"required> <br> </br>
				<small id="aviso" style="display:none">  As senhas não correspondem.</small> <br> </br>
			</div>

		
			<label for="termosdeuso">Termos de uso:</label>
			<textarea name="texto" id="termosdeuso" rows="30" cols="80" disabled>
Última atualização: Setembro, 2023.

Bem-vindo ao Marketplace de Biscoitos! Antes de utilizar nossos serviços, por favor, leia atentamente estes Termos de Uso. Este documento é um contrato legal entre você e o Marketplace de Biscoitos. Ao acessar ou utilizar nossa plataforma, você concorda com todos os termos e condições aqui estabelecidos. Se você não concordar com qualquer parte deste contrato, por favor, não utilize nossos serviços.

1. Aceitação dos Termos

Ao utilizar o Marketplace de Biscoitos, você concorda com estes Termos de Uso, nossa Política de Privacidade e quaisquer outras políticas ou diretrizes que possam ser publicadas em nossa plataforma. Reservamos o direito de modificar estes termos a qualquer momento, e tais modificações entrarão em vigor assim que forem publicadas. É sua responsabilidade revisar periodicamente esses termos para se manter informado sobre quaisquer atualizações.


2. Uso Responsável

Ao utilizar nossa plataforma, você concorda em:

Fornecer informações precisas e atualizadas em seu perfil.
Não criar múltiplas contas ou usar identidades falsas.
Respeitar os direitos de propriedade intelectual de terceiros.
Não divulgar informações pessoais sensíveis de outros usuários.
Não realizar atividades ilegais, fraudulentas ou prejudiciais.
Não usar nossa plataforma para assédio, difamação, spam ou qualquer forma de abuso.


3. Compra e Venda de Biscoitos

O Marketplace de Biscoitos facilita a compra e venda de biscoitos entre usuários. Todas as transações são de responsabilidade dos usuários envolvidos.
Os preços dos produtos, condições de venda e políticas de envio são estabelecidos pelos vendedores. Recomendamos a leitura cuidadosa das informações de cada anúncio.
O Marketplace de Biscoitos não garante a qualidade dos produtos anunciados, mas incentivamos a comunicação entre compradores e vendedores para resolver problemas.


4. Avaliações e Comentários

Os usuários podem avaliar e comentar sobre suas experiências com outros usuários. Estes devem ser construtivos e respeitosos.
O Marketplace de Biscoitos se reserva o direito de remover avaliações ou comentários que violem nossos termos ou políticas.


5. Privacidade e Segurança

Respeitamos a privacidade dos nossos usuários. Para mais informações, consulte nossa Política de Privacidade.
Mantenha suas credenciais de login seguras e não compartilhe sua senha com terceiros.


6. Rescisão de Conta

Reservamos o direito de suspender ou encerrar sua conta a qualquer momento, caso você viole estes Termos de Uso.


7. Responsabilidade

O Marketplace de Biscoitos não é responsável por quaisquer danos, perdas ou disputas resultantes do uso de nossa plataforma.
Recomendamos a resolução amigável de disputas antes de recorrer a meios legais.


8. Contato

Para entrar em contato conosco ou relatar violações destes Termos de Uso, utilize as informações de contato fornecidas em nossa plataforma.

Ao usar o Marketplace de Biscoitos, você concorda em cumprir estes Termos de Uso e reconhece que leu e entendeu todas as políticas relacionadas. Desejamos a você uma experiência agradável em nossa plataforma!
			</textarea> <br> </br>


 			<input class="form-check-input" type="checkbox" id="checkacordo" required>
			<label class="check" for="checkacordo"> Li e concordo com os termos de uso.</label> <br> </br>
	
	 
  			<button type="submit" class="btn btn-primary" id="botao" name="botao">Cadastrar</button>
		</form>


	
	</form>

</body>

<?php 
include_once("footer.php");

?>