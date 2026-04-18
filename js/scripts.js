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
