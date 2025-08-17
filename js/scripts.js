// Códigos
//Seleção de elementos

const email = document.querySelector("#user");
const senha = document.querySelector("#password");
const validaForm = document.querySelector("#form");
const visivelInvisivel = document.querySelector("#olho");
const mudaTemabtn = document.querySelector("#change-theme");
let spanErro = document.getElementById("erroLogin");

//Funções


//Eventos
//Muda a cor do input quando selecionado e quando não selecionado
user.addEventListener("blur",(e) =>{
    user.style.border = 'none'
})
user.addEventListener("focus",(e) =>{
    user.style.border = '1px solid hsl(240,100%,44%)'
    spanErro.style.display = "none";
})
senha.addEventListener("blur",(e) =>{
    senha.style.border = 'none'
})

senha.addEventListener("focus",(e) =>{
    senha.style.border = '1px solid hsl(240,100%,44%)'
    spanErro.style.display = "none";
})
//valida o formulário
validaForm.addEventListener("submit",(e) =>{
    e.preventDefault();

    const usuario = email.value;
    const senha = password.value;
    

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
visivelInvisivel.addEventListener("click",function(){
    const type = password.type === "password" ? "text" : "password";
    password.type = type;

    this.classList.toggle("fa-eye");
    this.classList.toggle("fa-eye-slash");

})

//Muda o tema da página

mudaTemabtn.addEventListener("change",function(){
    document.body.classList.toggle("dark");
})