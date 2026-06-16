<?php

include("conexao.php");

$erro = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM clientes 
    WHERE email = '$email' 
    AND senha = '$senha'";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){

        header("Location: loja.php");

    } else {

        $erro = "Email ou senha incorretos!";

    }

} 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHOP | LOGIN </title>
  <!-- Seu login.php estava funcionando com esse caminho -->
  <link rel="stylesheet" href="../css/login.css">

</head>
<body>
  <div class="logo_conteiner">
    <img class="logo" src="../imgsite/logo.png" alt="Logomarca">
  </div>
  <div>
    <h2 class="titulo"> SHOP CENTER <span class="variedades">Variedades!</span> </h2>
  </div>
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
   <form class="formulario" action="login.php" method="post">
    <div>
      <img class="logoforms" src="../imgsite/logo.png">
      <h2> Shop Center </h2>
      <p id="erro"><?php echo $erro; ?></p>
    </div>
    <input class="input" type="email" name="email" placeholder="Email" required>
    <input class="input" 
     type="password" 
     name="senha" 
     placeholder="Senha" 
     required 
     pattern=".{8,}"
     title="A senha deve ter no mínimo 8 caracteres">
     <div>
     <a class="novasenha" href="nvsenha.php"> Esqueci minha senha</a>
     </div>
    <button type="submit" class="entrar"> Entrar </button> 
    <div>
    <p class="conta" >Não tem conta?
      <a class="cadastro" href="cadastro.php">
        Cadastre-se!
      </a>
    </p>
    </div>
   </form>
</body>
<script>

setTimeout(() => {

    document.getElementById("erro").style.display = "none";

}, 5000);

</script>
</html>