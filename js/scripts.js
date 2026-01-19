const mudaTema = document.querySelector("#change-theme");
const visivelInvisivel = document.querySelector("#olho");
const valorUsuario = document.getElementById("user")
const valorSenha = document.getElementById("password")
const loginUsuario = document.getElementById("section__form--button")
const sideBar = document.querySelector(".sidebar");
let navPage = document.querySelectorAll("ul li")


// Altera o Tema da página clicando no ícone
function temaLightDark(){
    document.body.classList.toggle("dark");
    /*document.aside.classList.toggle("dark");*/
    mudaTema.checked = true;
}

// Altera o icone ao clicar nele
visivelInvisivel.addEventListener("click",function(){
    const tipo = password.type;
    if(tipo === "password"){
        password.type = "text";
    }
    else{
        password.type = "password";
    }
    
    this.classList.toggle("fa-eye-slash");
    this.classList.toggle("fa-eye");
})

// Válida o formulário

function validaForm(){
    const mensagemErro = document.querySelector(".div--mensagem-erro")
    if((valorSenha.value.trim() == "") || (valorSenha.value.trim == "")){
        console.log("Valor não inserido!!!")
        mensagemErro.style.display = "block"
    }
    else{
        // Vai para á próxima página
        window.location.href = "doc.html";
        console.log("Entrou");
        mensagemErro.style.display = "none";
        
    }
}

function chamaPagina(num){
    console.log("pagina"+num)
    for(let i=1;i<=5;i++){
        let limparSelecao = document.getElementById("pagina"+i)
        console.log("pagina"+i)
        limparSelecao.style.display = "none"
    }
    let paginaSel = document.getElementById("pagina"+num)
    paginaSel.style.display = "block"

    navPage.forEach(function(link){
        link.addEventListener('click', function() {

        navPage.forEach(function(l) {
            l.classList.remove('active');
            
        });
        this.classList.add('active');
        });
    });

}
