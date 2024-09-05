function Email() {
    var email = document.getElementById("email");
    var regexEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var emailinvalido = document.getElementById("naoexiste");
    var botao = document.getElementById("botao");


    if (email.value.match(regexEmail)){
        emailinvalido.style.display = 'none';
        botao.disabled = false;

    } else {
        emailinvalido.style.display= 'block';
        botao.disabled = true;
    }a
}
