// Códigos
//Seleção de elementos

const email = document.querySelector("#user");
const pass = document.querySelector("#password");
const validaForm = document.querySelector("#form");
const menuOpcoes = document.querySelector("#olho");


//Funções
function aparecer(){
    let contador = 0
    let vermenu = document.getElementById("visivel");
    if(vermenu.style.display === "none" && contador%2==0){
        vermenu.style.display = "block"
        contador = +contador
    }
    else{
        vermenu.style.display = "none"
        contador = +contador
    }

}



//Eventos
//Muda a cor do input quando selecionado e quando não selecionado
email.addEventListener("blur",(e) =>{
    user.style.border = 'none'
})
email.addEventListener("focus",(e) =>{
    user.style.border = '1px solid blue'
})
password.addEventListener("blur",(e) =>{
    pass.style.border = 'none'
})

password.addEventListener("focus",(e) =>{
    pass.style.border = '1px solid blue'
})
//valida o formulário
validaForm.addEventListener("submit",(e) =>{
    e.preventDefault();

    const usuario = email.value;
    const senha = password.value;
    let spanErro = document.getElementById("erroLogin");

    if(!usuario || !senha){
        spanErro.textContent = "Usuário ou senha incorretos.";
        spanErro.style.display = "block";
    }
    else{
        document.getElementById("botão-entrar").addEventListener("click",function(){
            // Vai para á próxima página
            window.location.href = "home.html"
            console.log(usuario,senha);
        })
    }

})

//abre o olho e fecha na imagem
menuOpcoes.addEventListener("click",function(){
    const type = password.type === "password" ? "text" : "password";
    password.type = type;

    this.classList.toggle("fa-eye");
    this.classList.toggle("fa-eye-slash");

})