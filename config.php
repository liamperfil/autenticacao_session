<?php
$conn = mysqli_connect('localhost', 'root', '');
$resultCreateDatabase = mysqli_query($conn, 'CREATE DATABASE IF NOT EXISTS xgo DEFAULT CHARACTER SET utf8mb4 DEFAULT COLLATE utf8mb4_general_ci;');
$conn = mysqli_connect('localhost', 'root', '', 'xgo');
$resultCreateTable = mysqli_query($conn, 'CREATE TABLE IF NOT EXISTS contas (usuario VARCHAR(20) PRIMARY KEY NOT NULL, senha VARCHAR(20) NOT NULL, col_test_pass VARCHAR(20));');
?>