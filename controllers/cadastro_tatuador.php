<?php
include("../models/conexao.php");
session_start();
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$senha = $_SESSION['password'];
$data = $_POST['nascimento'];
$especialidade = $_POST['especialidade'];
$cpf = $_POST['cpf'];
/* $nomeestudio = $_POST['nomeestudio']; */
/* $telefone = $_POST['telefone']; */
// alt shift setas cima e baixo para copiar linhas
/* $endereco = $_POST['endereco']; */
$senhacripto = md5($senha);
$diretorio = "../views/tatuador/imgs/";
$tabela = 'tatuador';

if($_FILES['arquivo'] )
{   
    $nomeImagem = $_FILES["arquivo"]["name"];
	$destino = $diretorio . "/" . $nomeImagem;
	$extension = pathinfo($destino, PATHINFO_EXTENSION);
	$nomeImagemRandom = md5(uniqid($nomeImagem));

    (move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . "/" . $nomeImagemRandom . "." . $extension));
	$stmt = $pdo->prepare("INSERT INTO profileimg SET imgName = :imgName, imgRandomName =:imgRandomName");
	$res = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, senha = :senha, email = :email, cpf = :cpf, especialidade = :especialidade, dataNascimento = :dataNascimento, profileImgId = :profileImgId");
}



$stmt->bindValue(":imgName", "$nomeImagem");
$stmt->bindValue(":imgRandomName", "$nomeImagemRandom.$extension");
$stmt->execute();
$IdImagem = $pdo->lastInsertId();


$res->bindValue(":nome", "$nome");
$res->bindValue(":email", "$email");
$res->bindValue(":senha", "$senhacripto");
$res->bindValue(":dataNascimento", "$data");
$res->bindValue(":cpf", "$cpf");
$res->bindValue(":especialidade", "$especialidade");
$res->bindValue(":profileImgId", "$IdImagem");
$res->execute();


header("location:../views/tatuador/tatuador.php"); //te manda pra index novamente
?>
