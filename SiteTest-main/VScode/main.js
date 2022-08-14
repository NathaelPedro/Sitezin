const nomeheader = document.querySelector(".HeaderName")

const nome = localStorage.getItem("nome")
if (nome == 0) {
    nomeheader.innerHTML = "Faça login"
} else {
    nomeheader.innerHTML = nome
}