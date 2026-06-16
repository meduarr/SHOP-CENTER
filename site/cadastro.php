<?php 

include("conexao.php");

mysqli_report(MYSQLI_REPORT_OFF);

$erro = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST['nome_completo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO clientes (nome_completo, email, senha)
    VALUES ('$nome', '$email', '$senha')";

    if(mysqli_query($conexao, $sql)){

        header("Location: login.php");

    } else {

        $erro = "Email já cadastrado!";

    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop | Cadastro</title>
  <link rel="stylesheet" href="../css/cadastro.css">

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
   <form class="formulario" action="cadastro.php" method="post">
    <div>
      <img class="logoforms" src="../imgsite/logo.png">
      <h2> Shop Center </h2>
      <p id="erro"><?php echo $erro; ?></p>
    </div>
    <input class="input" type="text" name="nome_completo" placeholder="Nome completo" required>
    <input class="input" type="email" name="email" placeholder="Email" required>
    <input class="input" type="password" name="senha" placeholder="Senha" required pattern="(?=.*[a-zA-Z])(?=.*\d)(?=.*[@.])[A-Za-z\d@.]{8,}"
    title="A senha deve ter no mínimo 8 caracteres, com letras, números e pelo menos @ ou .">
   <button type="submit" class="criarconta">
     Criar conta
   </button>
   </form>
</body>

<script>
setTimeout(() => {

    document.getElementById("erro").style.display = "none";

}, 5000);

</script>
</html>