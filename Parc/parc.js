let btn = document.querySelector(".btn");
let ajout = document.querySelector(".ajout");
let submit = document.querySelector("input[type='submit']")

const affichage = () =>{
    ajout.classList.remove("none");
    ajout.classList.add("flex");
}
const enlever = () =>{
    ajout.classList.add("none");
    ajout.classList.remove("flex");
}

btn.addEventListener("click", affichage)
submit.addEventListener("click",enlever);