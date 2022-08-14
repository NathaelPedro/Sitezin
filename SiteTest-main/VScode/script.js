const input = document.getElementsByClassName("login_input")
const form = document.querySelector(".login_section")
const button = document.querySelector(".login_btn")
const [nome, senha] = input

function validarInputs() {
    if (nome.value.length >= 3 & senha.value.length >= 3) {
        button.removeAttribute("disabled");
        return;
    } 
    button.setAttribute("disabled", "");
}
function handleSubmit (event) {
    event.preventDefault();
    window.localStorage.setItem("nome" ,nome.value)
    window.location = "/princ.html"
}


nome.addEventListener("input",validarInputs)
senha.addEventListener("input",validarInputs)
form.addEventListener("submit", handleSubmit)

