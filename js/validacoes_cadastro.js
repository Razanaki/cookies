function ConfirmacaoSenha() {
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

function Senha() {
    var senha = document.getElementById("senhausuario");
    var aviso = document.getElementById("senhainvalida");
    var regexSenha = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$/;
    var botao = document.getElementById("botao");

    if (senha.value.match(regexSenha)) {
        botao.disabled = false;
        aviso.style.color='grey';
    } else {
        aviso.style.color='red';
        botao.disabled = true;
    }

}

function Email() {
    var email = document.getElementById("emailusuario");
    var regexEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var emailinvalido = document.getElementById("emailinvalido");
    var botao = document.getElementById("botao");

    if (email.value.match(regexEmail)){
        emailinvalido.style.display = 'none';
        botao.disabled = false;
    } else {
        emailinvalido.style.display= 'block';
        botao.disabled = true;
    }
}

function Genero() {
    var genero = document.getElementById("generousuario");
    var avisogenero = document.getElementById("insiragenero");
    var botao = document.getElementById("botao");

    if (genero.value === '') {
        avisogenero.style.display='block';
        botao.disabled = true;
    } else {
        avisogenero.style.display='none';
        botao.disabled = false;
    }
}

function Nome(){
    var nome = document.getElementById("nomeusuario");
    var avisonome = document.getElementById("nomeinvalido");
    var botao = document.getElementById("botao");

    if (nome.value === '') {
        avisonome.style.display='block';
        botao.disabled = true;
    } else {
        avisonome.style.display='none';
        botao.disabled = false;
    }
}

function Sobrenome(){
    var sobrenome = document.getElementById("sobrenomeusuario");
    var avisosobrenome = document.getElementById("sobrenomeinvalido");
    var botao = document.getElementById("botao");

    if (sobrenome.value === '') {
        avisosobrenome.style.display = 'block';
        botao.disabled = true;
    } else {
        avisosobrenome.style.display = 'none';
        botao.disabled = false;
    }
}

function Usuario(){
    var usuario = document.getElementById("contausuario");
    var usuarioinvalido = document.getElementById("usuarioinvalido");
    var usuarioexiste = document.getElementById("usuarioexiste");
    var botao = document.getElementById("botao");

    if (usuario.value === '') {
        usuarioinvalido.style.display= 'block';
        botao.disabled = true;
    } else {
        usuarioinvalido.style.display = 'none';
        botao.disabled = false;
    }

}