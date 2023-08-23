<?php
include("../models/conexao.php");
session_start();
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$senha = $_SESSION['password'];
$estudio = $_POST['nomeestudio'];
$telefone = $_POST['telefone'];
$especialidade = $_POST['especialidade'];
$endereco = $_POST['endereco'];
$senhacripto = md5($senha);

/* 
mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha, estudio, telefone, especialidade, endereco) VALUES ('$nome', '$email', '$senha', '$estudio', '$telefone', '$especialidade', '$endereco')");
 */

mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha, estudio, telefone, especialidade, endereco) VALUES ('$nome', '$email', '$senhacripto', '$estudio', '$telefone', '$especialidade', '$endereco')");


header("location:../index.html"); //te manda pra index novamente
?>
