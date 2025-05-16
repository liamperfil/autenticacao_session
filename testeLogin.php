<?php
    session_start();

    if(isset($_POST['entrar']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        //TESTE SENHA CRIPTO
        $sql = mysqli_query($conn, "SELECT * FROM contas WHERE usuario = '$usuario'");
        if (mysqli_num_rows($sql) > 0)
        {
            $sql = mysqli_query($conn, "UPDATE contas SET col_test_pass=AES_ENCRYPT('$senha', '$senha') WHERE usuario='$usuario';");
            $sql = mysqli_query($conn, "SELECT col_test_pass FROM contas WHERE usuario='$usuario';");
            $campo = mysqli_fetch_array($sql);
            $senha = $campo['col_test_pass'];
        }
        //TESTE
        
        $sql = "SELECT * FROM contas WHERE usuario = '$usuario' and senha = '$senha'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);

            header('Location: login.php');
        } else {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            
            header('Location: sistema.php');
        }

    } else {
        header('Location: login.php');
    };
?>