<link rel="stylesheet" href="../css/esqueceusenha.css">
<?php include_once("header.php");
include("..\connect\conexao_login.php");
?>


<body>
    <div class="titulo">
        <h1> Esqueceu sua senha?</h1>
    </div>


    <div class="texto"><text id="a">Insira o seu e-mail abaixo e enviaremos um link para redefinir sua senha.
            Certifique-se de usar o endereço de e-mail associado à sua conta. <br>
            Se não receber o e-mail dentro de alguns minutos, verifique sua pasta de spam ou entre em contato conosco
            para assistência.
            <br>
            <br>

            <input type="email" class="form-control" name="email" id="email" placeholder="nome@exemplo.com" required>
            <br>
            <button type="submit" class="btn btn-primary" id="botao">Enviar</button>






            <br>
            <br> <br>
    </div>
    </text>
    </div>
</body>










<?php include_once("footer.php");
?>