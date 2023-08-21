<?php
include("../models/conexao.php");
session_start();
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$estudio = $_POST['nomeestudio'];
$telefone = $_POST['telefone'];
$especialidade = $_POST['especialidade'];
$endereco = $_POST['endereco'];

mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha, estudio, telefone, especialidade, endereco) VALUES ('$nome', '$email', '$senha', '$estudio', '$telefone', '$especialidade', '$endereco')");

?>
