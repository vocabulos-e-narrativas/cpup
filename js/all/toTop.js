// Quando a página é rolada
window.onscroll = function () {
    // Verifica a posição atual da janela
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        // Se a posição atual for maior que 20 pixels, mostra o botão
        document.getElementById("to-top-button").style.display = "block";
    } else {
        // Caso contrário, oculta o botão
        document.getElementById("to-top-button").style.display = "none";
    }
};

// Quando o botão é clicado
document.getElementById("to-top-button").onclick = function () {
    // Rola suavemente para o topo
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
};