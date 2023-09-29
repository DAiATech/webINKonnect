<?php
include ("../models/conexao.php");
$email = $_POST["email"];
$senha = $_POST["password"];
$senhacripto = md5($senha);
$dados = mysqli_query($conexao, "SELECT * from usuarios where email = '$email' && senha = '$senhacripto';");
$result = mysqli_fetch_array($dados); 
if ($login_email == $result['email'] && $senhacripto == $result['senha']) 
{ 
    session_start();
    $_SESSION["consumidor"]=1;
    $_SESSION["usuario"]=$result['nome'];
    $_SESSION["codigo"] =$result['id'];
    header("location:../redirecionamento.php");
}
/* else if($login_email == $result['email'] && $senhacripto == $result['senha']) {
    session_start();
    $_SESSION["profissional"]=1;
    $_SESSION["usuario"]=$result['usuario_nome'];
    $_SESSION["codigo"] =$result['usuario_codigo'];
    header("location:../redirecionamento.php");
} */
else
	{
        echo "Erro";
    }
?>
