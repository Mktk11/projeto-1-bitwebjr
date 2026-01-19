const mudaTema = document.querySelector("#change-theme");

mudaTema.addEventListener("click" , () => {
    document.body.classList.toggle("dark");
    mudaTemabtn.checked = true;
})