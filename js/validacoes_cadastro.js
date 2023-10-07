function SenhaEConfirmacao() {
    var senha = document.getElementById("senhausuario").value;
    var confirmacaoSenha = document.getElementById("confirmacaosenha").value;
    var botao = document.getElementById("botao");
    var aviso = document.getElementById("aviso");


    if (senha !== confirmacaoSenha) {
        aviso.style.display = 'block';
        botao.disabled = true;
        return false;
    } else {
        aviso.style.display = 'none';
        botao.disabled = false;
        return true;
    }
}

