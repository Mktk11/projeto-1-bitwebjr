// Mudança de tema claro para tema escuro ou vice-versa
const mudaTema = document.querySelector("#change-theme");

if(localStorage.getItem("tema") === "dark"){
    document.body.classList.add("tema--dark");
    mudaTema.checked = true;
}else{
    document.body.classList.add("tema--light");
    mudaTema.checked = false;
}

mudaTema.addEventListener('change', () => {
    if(mudaTema.checked){
        document.body.classList.add("tema--dark");
        document.body.classList.remove("tema--light");
        console.log("Tema light");
    } else {
        document.body.classList.remove("tema--dark");
        document.body.classList.add("tema--light");
        console.log("Tema dark");
    }
});

// Renderizando o calendário da página home
const corpoCalendario =  document.getElementById("tbody--calendariocorpo");
const textomesAtual = document.getElementById("div__mesatual");

const btnMesanterior = document.getElementById("div__mestras");
const btnMesposterior = document.getElementById("div__mesfrente");

const dataVisualiza = new Date();

if(btnMesanterior || btnMesposterior){
    function renderizarCalendario(){
        corpoCalendario.innerHTML = "";
        const ano = dataVisualiza.getFullYear();
        const mes = dataVisualiza.getMonth();

        const nomeMes = dataVisualiza.toLocaleString('pt-BR', { month: 'long' });
        textomesAtual.innerHTML = nomeMes.charAt(0).toUpperCase() + nomeMes.slice(1) + " " + ano;

        const primeiroDiaSemana = new Date(ano, mes, 1).getDay(); 
        const ultimoDiaMes = new Date(ano, mes + 1, 0).getDate(); 

        let diaAtual = 1;
        
        // 4. Criação das linhas (semanas)
        for (let i = 0; i < 6; i++) { // Máximo de 6 semanas
            let linha = document.createElement("tr");
            console.log("Calendário");
            for (let j = 0; j < 7; j++) { // 7 dias por semana
                let celula = document.createElement("td");

                if (i === 0 && j < primeiroDiaSemana) {
                    // Células vazias antes do dia 1
                    celula.textContent = "";
                } else if (diaAtual > ultimoDiaMes) {
                    // Para de criar células se o mês acabou
                    break;
                } else {
                    celula.textContent = diaAtual;
                    diaAtual++;
                }
                linha.appendChild(celula);
            }
            corpoCalendario.appendChild(linha);
            if (diaAtual > ultimoDiaMes) break;
        }
    }
}

if(btnMesanterior || btnMesposterior){
    btnMesanterior.addEventListener('click',()=>{
        dataVisualiza.setMonth(dataVisualiza.getMonth()-1);
        renderizarCalendario();
    });
    btnMesposterior.addEventListener('click',()=>{
        dataVisualiza.setMonth(dataVisualiza.getMonth()+1);
        renderizarCalendario();
    });
}

if(btnMesanterior || btnMesposterior){
    renderizarCalendario();
}


// Ativando o formulário cadastro e o formulário login

const btnCadastro = document.getElementById("btn--cadastro");
const btnLogin = document.getElementById("btn--login");

const formCadastro = document.querySelector(".form--cadastro");
const formLogin = document.querySelector(".form--login");

const tituloLogin = document.querySelector(".form--login_h2");
const tituloCadastro = document.querySelector(".form--cadastro_h2");

btnCadastro.addEventListener('click', () => {
    formCadastro.classList.remove("hidden");
    formLogin.classList.add("hidden");
    tituloCadastro.classList.remove("hidden");
    tituloLogin.classList.add("hidden");
});

btnLogin.addEventListener('click', () => {
    formCadastro.classList.add("hidden");
    formLogin.classList.remove("hidden");
    tituloCadastro.classList.add("hidden");
    tituloLogin.classList.remove("hidden");
});
