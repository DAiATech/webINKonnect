<?php
include("../models/conexao.php");
session_start();
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$senha = $_SESSION['password'];
$data = $_POST['nascimento'];
$nomeestudio = $_POST['nomeestudio'];
$telefone = $_POST['telefone'];
$especialidade = $_POST['especialidade'];
$endereco = $_POST['endereco'];

$senhacripto = md5($senha);
$diretorio = "../views/tatuador/imgs/";
$tabela = 'usuarios';

if($_FILES['arquivo'] )
{   
    $nomeImagem = $_FILES["arquivo"]["name"];
	$destino = $diretorio . "/" . $nomeImagem;
	$extension = pathinfo($destino, PATHINFO_EXTENSION);
	$nomeImagemRandom = md5(uniqid($nomeImagem));

    (move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . "/" . $nomeImagemRandom . "." . $extension));
}

$res = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, email = :email, senha = :senha, dataNascimento = :dataNascimento, nivel = :nivel, imagemProfile = :imagemProfile");

/* mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha, estudio, telefone, especialidade, endereco) VALUES ('$nome', '$email', '$senhacripto', '$estudio', '$telefone', '$especialidade', '$endereco')");
 */

$res->bindValue(":nome", "$nome");
$res->bindValue(":email", "$email");
$res->bindValue(":senha", "$senhacripto");
$res->bindValue(":dataNascimento", "$data");
$res->bindValue(":imagemProfile", "$nomeImagemRandom.$extension");
$res->bindValue(":estudio", "$nomeestudio");
$res->bindValue(":telefone", "$telefone");
$res->bindValue(":endereco", "$endereco");
$res->bindValue(":nivel", 1);
$res->execute();


header("location:../views/cliente/cliente.php"); //te manda pra index novamente
?>
