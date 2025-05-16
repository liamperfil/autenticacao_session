<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
    <title>GO | CADASTRAR</title>
</head>

<body class="home">
    <a href="index.php">voltar</a>

    <section class="centro">
        <h1>Sistema GO!</h1>
        <h2>Jean Lima</h2>
    </section>

    <div class="box">
        <form action="cadastrar.php" method="POST">
            <h2>Cadastro simples:</h2>
            <input type="text" name="usuario" id="usuario" placeholder="usuario" autofocus>
            <input type="password" name="senha" id="senha" placeholder="senha">
            <input type="submit" value="Cadastre-se" name="cadastrar" id="cadastrar">
        </form>
    </div>

    <?php
    if (isset($_POST['cadastrar'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        include_once('config.php');

        $sql = "SELECT * FROM contas WHERE usuario = '$usuario'"; // testa se já existe usuário
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) < 1){
            //  se o registro não existe então envia os dados para o banco
            $sql = "INSERT INTO contas (usuario, senha, col_test_pass) VALUES ('$usuario', AES_ENCRYPT('$senha', '$senha'), DEFAULT)";
            $result = mysqli_query($conn, $sql);
            header('Location: sistema.php');
        } else {
            echo 'Este usuário já foi cadastrado, tente novamente.';
        }
    }


    ?>
</body>

</html>