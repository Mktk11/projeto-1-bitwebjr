const mudaTema = document.querySelector("#change-theme");
const valorUsuario = document.getElementById("user")
const valorSenha = document.getElementById("password")
const loginUsuario = document.getElementById("section__form--button")
const sideBar = document.querySelector(".sidebar");
let navPage = document.querySelectorAll("span ul li");
const formCadastro = document.getElementById("form--cadastro");
const formLogin = document.getElementById("form--login");
const botaoFechar = document.getElementById("btn--expandir");
const temaSalvo = localStorage.getItem("mudaTema");
const lateralMenu = document.querySelector(".menu-lateral");

let agora = new Date();
let ano = agora.getFullYear();
let mes = agora.getMonth();

const mesAtualTexto = document.getElementById("div__mesatual");
const corpoTabela = document.getElementById("tbody--calendariocorpo");
const avancaMes = document.getElementById("div__mesfrente");
const trasMes = document.getElementById("div__mestras");


if(temaSalvo=="tema--dark"){
    document.body.classList.add("tema--dark");
    mudaTema.checked = true;
}else{
    document.body.classList.remove("tema--dark");
    mudaTema.checked = false;
}

// Altera o Tema da página clicando no ícone
function temaLightDark(){
    if(document.body.classList.contains("tema--dark")){
        document.body.classList.remove("tema--dark")
        document.body.classList.add("tema--light");
        /*document.aside.classList.toggle("dark");*/
        mudaTema.checked = false;
        localStorage.setItem("mudaTema", "tema--light");
    }else{
        document.body.classList.add("tema--dark");
        document.body.classList.remove("tema--light")
        /*document.aside.classList.toggle("dark");*/
        mudaTema.checked = true;
        localStorage.setItem("mudaTema", "tema--dark");
    }
    
}
function botaoAtivado(forma){
    if(forma=="cadastro"){
        formCadastro.style.display = "block";
        formLogin.style.display = "none";
    }
    else{
        formCadastro.style.display = "none";
        formLogin.style.display = "block";
    }
}

;

/*function fecharMenu(){
    lateralMenu.classList.toggle('diminuir');
}*/

// Válida o formulário

/*function validaForm(){
    const mensagemErro = document.querySelector(".div--mensagem-erro")
    if((valorSenha.value.trim() == "") || (valorSenha.value.trim() == "")){
        console.log("Valor não inserido!!!")
        mensagemErro.style.display = "block"
    }
    else{
        // Vai para á próxima página
        console.log("Entrou");
        mensagemErro.style.display = "none";
        
    }
}

function chamaPagina(num){
    console.log("pagina"+num)
    for(let i=1;i<=5;i++){
        let limparSelecao = document.getElementById("pagina"+i)
        limparSelecao.style.display = "none"
    }
    let paginaSel = document.getElementById("pagina"+num)
    paginaSel.style.display = "block"

    navPage.forEach(link => link.classList.remove('active'));
    if (navPage[num-1]) navPage[num-1].classList.add('active');

}

function botaoAtivado(forma){
    if(forma=="cadastro"){
        formCadastro.style.display = "block";
        formLogin.style.display = "none";
    }
    else{
        formCadastro.style.display = "none";
        formLogin.style.display = "block";
    }
}
*/
const todosMeses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

function renderizarCalendario(){
    corpoTabela.innerHTML = "";
    mesAtualTexto.innerText = `${todosMeses[mes]} de ${ano}`;
    console.log("Calendario");
    let primeiroDiaDaSemana = new Date(ano, mes, 1).getDay();
    let totalDiasNoMes = new Date(ano, mes + 1, 0).getDate();

    let linhaAtual = document.createElement("tr");

    for (let i = 0; i < primeiroDiaDaSemana; i++) {
        let tdVazio = document.createElement("td");
        linhaAtual.appendChild(tdVazio);
    }

    // 4. Preencher os dias do mês
    for (let dia = 1; dia <= totalDiasNoMes; dia++) {
        let tdDia = document.createElement("td");
        tdDia.textContent = dia;
        linhaAtual.appendChild(tdDia);

        if (linhaAtual.children.length === 7) {
            corpoTabela.appendChild(linhaAtual);
            linhaAtual = document.createElement("tr");
        }
    }

    // Adiciona a última linha, se houver dias nela
    if (linhaAtual.children.length > 0) {
        corpoTabela.appendChild(linhaAtual);
    }
};


avancaMes.addEventListener('click', function() {
    console.log(mes);
    mes++;
    if (mes > 11) {
        mes = 0;
        ano++;
    }
    renderizarCalendario();
});

// Evento para Voltar (importante ter também!)
trasMes.addEventListener('click', function() {
    console.log(mes);
    mes--;
    if (mes < 0) {
        mes = 11;
        ano--;
    }
    renderizarCalendario();
});

// Chamada inicial para montar o calendário assim que a página carregar
renderizarCalendario();