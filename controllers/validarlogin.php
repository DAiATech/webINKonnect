<?php
include("../models/conexao.php");
/* $email = $_POST["email"];
$senha = $_POST["password"];
$verifysenha = md5($senha);
$dados = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email';");
$result = mysqli_fetch_array($dados); 


if ($result && password_verify($verifysenha, $result['senha'])) 
{
    session_start();
    $_SESSION["consumidor"] = 1;
    $_SESSION["usuario"] = $result['nome'];
    $_SESSION["codigo"] = $result['id'];
    header("location:../redirecionamento.php");
} 
else
{
    echo "Erro";
} */
$email = $_POST["email"];
$senha = $_POST["password"];
$verifysenha = md5($senha);
$dados = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email';");
$result = mysqli_fetch_array($dados); 
 
session_start();
$_SESSION["consumidor"] = 1;
$_SESSION["usuario"] = $result['nome'];
$_SESSION["codigo"] = $result['id'];
header("location:../redirecionamento.php");
?>
