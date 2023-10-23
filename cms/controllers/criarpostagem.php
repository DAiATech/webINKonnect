<?php
include("../../models/conexao.php");
session_start();
//  descricao, estilo, tatuadorId
$idTatuador = $_SESSION["id"];
$descricao = $_POST['descricao'];
$estilo = $_POST['estilo'];
$diretorio = "../views/tatuador/imgs/";


if ($_FILES['arquivo']) {
    $nomeImagem = $_FILES["arquivo"]["name"];
    $destino = $diretorio . "/" . $nomeImagem;
    $extension = pathinfo($destino, PATHINFO_EXTENSION);
    $nomeImagemRandom = md5(uniqid($nomeImagem));
    (move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . "/" . $nomeImagemRandom . "." . $extension));


    $stmt = $pdo->prepare("INSERT INTO PostagensImg SET imgName = :imgName, imgRandomName =:imgRandomName");
    echo "idtatuador =$idTatuador <br>";
    echo "descricao = $descricao <br>";
    echo "estilo= $estilo <br>";

    $res = $pdo->prepare("INSERT INTO postagenstatuadores SET descricao = :descricao, estilo = :estilo, imgPostId = :imgPostId, tatuadorId = :tatuadorId"); //probrema
    /* $stmt2 = $pdo->prepare("UPDATE tatuador SET tatuador.postagem = :postagem WHERE tatuador.id = $idTatuador"); */

}

$stmt->bindValue(":imgName", "$nomeImagem");
$stmt->bindValue(":imgRandomName", "$nomeImagemRandom");
$stmt->execute();
$IdImagem = $pdo->lastInsertId();
echo "idimagem = $IdImagem ";

$res->bindValue(":descricao", "$descricao");
$res->bindValue(":estilo", "$estilo");
$res->bindValue(":imgPostId", "$IdImagem");
$res->bindValue(":tatuadorId", "$idTatuador");
try {
    $res->execute();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
/* $stmt2->bindValue(":postagem", "1");
$stmt2->execute(); */


?>