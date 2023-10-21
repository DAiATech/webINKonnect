<?php 
include("../../models/conexao.php");
session_start();
$tabela = 'postagensTatuadores';
//  descricao, estilo, tatuadorId
$idTatuador = $_SESSION["id"];
$descricao = $_POST['descricao'];
$estilo = $_POST['estilo'];
$diretorio = "../views/tatuador/imgs/";
$tabela = 'postagensTatuadores';



if($_FILES['arquivo'] )
{   
    $nomeImagem = $_FILES["arquivo"]["name"];
	$destino = $diretorio . "/" . $nomeImagem;
	$extension = pathinfo($destino, PATHINFO_EXTENSION);
	$nomeImagemRandom = md5(uniqid($nomeImagem));

    (move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . "/" . $nomeImagemRandom . "." . $extension));
    $stmt = $pdo->prepare("INSERT INTO PostagensImg SET imgName = :imgName, imgRandomName =:imgRandomName");
    $res = $pdo->prepare("INSERT INTO $tabela SET descricao = :descricao, estilo = :estilo, imgPostId = :imgPostId, tatuadorId = :tatuadorId ");

    $stmt2 = $pdo->prepare("UPDATE tatuador SET tatuador.postagem = :postagem
    WHERE tatuador.id = $idTatuador");
}

$stmt->bindValue(":imgName", "$nomeImagem");
$stmt->bindValue(":imgRandomName", "$nomeImagemRandom");
$stmt->execute();
$IdImagem = $pdo->lastInsertId();
$res->bindValue(":descricao", "$descricao");
$res->bindValue(":estilo", "$estilo");
$res->bindValue(":imgPostId", "$IdImagem");
$res->bindValue(":tatuadorId", "$idTatuador");
$stmt2->bindValue(":postagem", "1");
$stmt2->execute();
$res->execute();

?>