<?php
include("../models/conexao.php");
$nivel = $_GET["nivel"];
$email = $_POST["email"];
$senha = $_POST["password"];
$senhacripto = md5($senha);
$dadoscliente = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email';");
$resultcliente = mysqli_fetch_array($dadoscliente);

$dadostatuador = mysqli_query($conexao, "SELECT * FROM tatuador WHERE email = '$email';");
$resulttatuador = mysqli_fetch_array($dadostatuador);

if ($nivel == 'cliente') {

    if ($email == $resultcliente['email'] && $senhacripto == $resultcliente['senha']) {
        session_start();
        $_SESSION["nivel"] = 'cliente';
        $_SESSION["usuario"] = $resultcliente['nome'];
        $_SESSION["id"] = $resultcliente['id'];
        header("location:../redirecionamento.php");
    } else {
        echo "Erro";
    }

} else if ($nivel == 'tatuador') {

    if ($email == $resulttatuador['email'] && $senhacripto == $resulttatuador['senha']) {
        session_start();
        $_SESSION["nivel"] = 'tatuador';
        $_SESSION["usuario"] = $resulttatuador['nome'];
        $_SESSION["id"] = $resulttatuador['id'];
        header("location:../redirecionamento.php");
    } else {
        echo "Erro";
    }

}
else{
    echo "erro, nível incorreto";
}
