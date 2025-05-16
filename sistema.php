<?php
    session_start();

    if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } else {
        $logado = $_SESSION['usuario'];
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema GO!</title>
</head>
<body>
  <a href="sair.php">sair</a>
    <h1>Acessou o sistema! Como <?php echo $logado; ?>.  </h1>
    
</body>
</html>