<?php
include("conexao.php");
$erro = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $novasenha = $_POST['nova_senha'];

    // PRIMEIRO: verificar se o email existe
    $verifica = "SELECT * FROM clientes WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $verifica);
    
    if(mysqli_num_rows($resultado) > 0){
        // SEGUNDO: email existe, atualizar senha
        $sql = "UPDATE clientes SET senha = '$novasenha' WHERE email = '$email'";
        mysqli_query($conexao, $sql);
        header("Location: login.php");
        exit();
    } else {
        // TERCEIRO: email NÃO existe
        $erro = "Email não cadastrado!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nova Senha</title>
  <link rel="stylesheet" href="../css/nvsenha.css">
</head>
<body>
  <div class="logo_conteiner">
    <img class="logo" src="../imgsite/logo.png" alt="Logomarca">
  </div>
  
  <h2 class="titulo"> SHOP CENTER <span class="variedades">Variedades!</span> </h2>
  
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
  
  <form class="formulario" action="nvsenha.php" method="post">
    <div>
      <img class="logoforms" src="../imgsite/logo.png">
      <h2> Shop Center </h2>
      <p id="erro"><?php echo $erro; ?></p>
    </div>
    
    <input class="input" type="email" name="email" placeholder="Email" required>
    <input class="input" type="password" name="nova_senha" placeholder="Nova Senha" required pattern=".{8,}" title="A senha deve ter no mínimo 8 caracteres">
    
    <button type="submit" class="entrar"> Redefinir Senha </button>
  </form>
</body>

<script>
setTimeout(() => {

    document.getElementById("erro").style.display = "none";

}, 5000);

</script>
</html>