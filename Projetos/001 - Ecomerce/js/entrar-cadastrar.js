document.getElementById('login-signup').addEventListener('change', function() {
    const isChecked = this.checked;
    document.querySelector('.front').style.display = isChecked ? 'none' : 'block';
    document.querySelector('.back').style.display = isChecked ? 'block' : 'none';
}); 

const logar = document.getElementsByClassName("logar")[0];
const cadastrar = document.getElementsByClassName("cadastrar")[0];

logar.addEventListener('click', function(event) {
    validarLogin()
});

cadastrar.addEventListener('click', function(event) {
    validarCadastro()
});


function validarLogin() {
    const username = document.getElementById("login-username").value;
    const senha = document.getElementById("login-senha").value;
    const alertaModal = document.getElementById("alerta-modal");
    const listaErros = document.getElementById("lista-erros");
    
    if (listaErros) listaErros.innerHTML = "";

    if (!username || !senha) {
        const itemErro = document.createElement("li");
        itemErro.textContent = "É necessário digitar usuário e senha para prosseguir.";
        listaErros.appendChild(itemErro);
        alertaModal.style.display = "flex";
    } else {
        alertaModal.style.display = "none";
    }
}

function validarCadastro() {
    const username = document.getElementById("signup-username").value;
    const login = document.getElementById("signup-login").value;
    const email = document.getElementById("signup-email").value;
    const cpf = document.getElementById("signup-cpf").value;
    const senha = document.getElementById("signup-senha").value;

    const alertaModal = document.getElementById("alerta-modal");
    const listaErros = document.getElementById("lista-erros");

    if (listaErros) listaErros.innerHTML = "";

    if (!username) {
        const itemErro = document.createElement("li");
        itemErro.textContent = "Nome de usuário não preenchido.";
        listaErros.appendChild(itemErro);
    }

    if (!login) {
        const itemErro = document.createElement("li");
        itemErro.textContent = "Login não preenchido.";
        listaErros.appendChild(itemErro);
    }

    if (!email) {
        const itemErro = document.createElement("li");
        itemErro.textContent = "E-mail não preenchido.";
        listaErros.appendChild(itemErro);
    }

    if (!cpf) {
        const itemErro = document.createElement("li");
        itemErro.textContent = "CPF não preenchido.";
        listaErros.appendChild(itemErro);
    }

    if (!senha) {
        const itemErro = document.createElement("li");
        itemErro.textContent = "Senha não preenchida.";
        listaErros.appendChild(itemErro);
    }

    if (listaErros.childElementCount > 0) {
        alertaModal.style.display = "flex";
    } 
}

function fecharModal() {
    const alertaModal = document.getElementById("alerta-modal");
    const listaErros = document.getElementById("lista-erros");

    if (alertaModal) alertaModal.style.display = "none";
    if (listaErros) listaErros.innerHTML = "";
}
