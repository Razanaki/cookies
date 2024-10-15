<link rel="stylesheet" href="../css/esqueceusenha.css">
<?php include_once("header.php");
?>

<script src="../js/validacoes_redefinesenha.js"></script>


<body>
    <div class="titulo">
        <h1> Esqueceu sua senha?</h1>
    </div>

    <form id="redefinesenha" form action="../connect/conexao_redefinesenha.php" method="post">
        <div class="texto" text id="texto">Insira o seu
            e-mail abaixo e enviaremos um link para redefinir sua senha.
            Certifique-se de usar o endereço de e-mail associado à sua conta. <br>
            Se não receber o e-mail dentro de alguns minutos, verifique sua pasta de spam ou entre em contato
            conosco
            para assistência.
            <br>
            <br>
            <input type="email" class="form-control" name="email" id="email" placeholder="nome@exemplo.com" onblur="Email()" required>
            <small id="naoexiste" style="display:none">Email inválido.</small>
 
            <br>
            <br>
    
            <button type="submit" class="btn btn-primary" id="botao">Enviar</button>

        </div>
    </form>




    </div>
    </text>
    </div>
</body>










<?php include_once("footer.php");
?>