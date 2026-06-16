<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHOP | HOME</title>
  <link rel="stylesheet" href="../css/index.css">
</head>
<body>
  <style>

</style>
  <div class="logo_conteiner">
    <img class="logo" src="../imgsite/logo.png" alt="Logomarca">
  </div>
  <div>
    <h2 class="titulo"> SHOP CENTER <span class="variedades">Variedades!</span> </h2>
  </div>
  <h3 class="seuestilo" > Variedades para o seu estilo e dia a dia, com conforto, <br> qualidade e preço acessível. </h3>
  <img class="bolsa" src="../imgsite/bolsa.nova.png" alt="Bolsa">
  <div>
    <a href="produtos.php" class="shopacesso">
     <img class="shop" src="../imgsite/logocarro.png" alt="Carrinho">
     SHOP
    </a>
  </div>
  <div>
  <a href="index.php" class="home">
     <img class="produtohome" src="../imgsite/home.png" alt="home">
     HOME
  </a>
  </div>
  <div>
    <a href="login.php" class="login">
      <button class="botao">
        Entrar
      </button>
    </a>
  </div>

<div class="acessorios">
  <button class="setaesquerda" onclick="voltar()">&#10094;</button>

  <img id="imagemSlider" class="novidade" src="../img/bolsa1.jpg">

  <button class="setadireita" onclick="avancar()">&#10095;</button>
</div>

<script src="../js/index.js"></script> 
</body>
</html>


