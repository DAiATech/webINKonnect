<?php
include ("../models/conexao.php");
$login_email = $_POST["email"];
$login_password = $_POST["password"];
$senhacripto = md5($login_password);
$dados = mysqli_query($conexao, "SELECT * from usuarios where email = '$login_email' && senha = '$senhacripto';");
$result = mysqli_fetch_array($dados); 
if ($login_email == $result['email'] && $senhacripto == $result['senha']) 
{ 
    session_start();
    $_SESSION["consumidor"]=1;
    $_SESSION["usuario"]=$result['usuario_nome'];
    $_SESSION["codigo"] =$result['usuario_codigo'];
    header("location:../redirecionamento.php");
}
else if($login_email == $result['email'] && $senhacripto == $result['senha']) {
    session_start();
    $_SESSION["profissional"]=1;
    $_SESSION["usuario"]=$result['usuario_nome'];
    $_SESSION["codigo"] =$result['usuario_codigo'];
    header("location:../redirecionamento.php");
}
else
	{
        echo "Erro";
    }
?>
