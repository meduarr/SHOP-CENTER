const imagens = [
  "../img/bolsa1.jpg",
  "../img/bolsa2.webp",
  "../img/sandalias.jpg",
];

let indice = 0;

function avancar() {
  indice++;
  if (indice >= imagens.length) {
    indice = 0;
  }
  document.getElementById("imagemSlider").src = imagens[indice];
}

function voltar() {
  indice--;
  if (indice < 0) {
    indice = imagens.length - 1;
  }
  document.getElementById("imagemSlider").src = imagens[indice];
}
