<?php
    session_start();
    include_once("config.php");
    $sql = mysqli_query($conn, "UPDATE contas SET col_test_pass='' WHERE usuario='$_SESSION[usuario]';");
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.php');
?>