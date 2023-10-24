<?php
session_start();

/* if (isset($_SESSION["nivel"]) && $_SESSION["nivel"] == 'cliente') {
    $tabela = "usuarios";
} elseif (isset($_SESSION["nivel"]) && $_SESSION["nivel"] == 'tatuador') {
    $tabela = "tatuador";
} */
$id = $_SESSION["id"];
function getInfoProfileUser()
{
    /*  global $tabela; */
    global $id;
    return "SELECT * from usuarios where id = '$id'";
}
function getInfoProfileTatuador()
{
    global $id;
    return "SELECT postagenstatuadores.*, tatuador.*,postagensimg.imgRandomName AS postagemImgRandomName, 
    profileimg.imgRandomName AS profileImgRandomName  
    FROM postagenstatuadores 
    INNER JOIN postagensimg ON imgPostId = postagensimg.id
    INNER JOIN tatuador ON tatuadorId = tatuador.id
    INNER JOIN profileimg ON tatuador.profileImgId = profileimg.id
    WHERE postagenstatuadores.tatuadorId = $id";
}

function getPostsTatuador()
{
    global $id;
    return "SELECT postagenstatuadores.*, tatuador.nome,postagensimg.imgRandomName AS postagemImgRandomName, 
    profileimg.imgRandomName AS profileImgRandomName  
    FROM postagenstatuadores 
    INNER JOIN postagensimg ON imgPostId = postagensimg.id
    INNER JOIN tatuador ON tatuadorId = tatuador.id
    INNER JOIN profileimg ON tatuador.profileImgId = profileimg.id
    WHERE postagenstatuadores.tatuadorId = $id";
}

function getInfoPosts()
{
    return "SELECT postagenstatuadores.*, tatuador.nome,postagensimg.imgRandomName AS postagemImgRandomName, 
    profileimg.imgRandomName AS profileImgRandomName  
    FROM postagenstatuadores 
    INNER JOIN postagensimg ON imgPostId = postagensimg.id
    INNER JOIN tatuador ON tatuadorId = tatuador.id
    INNER JOIN profileimg ON tatuador.profileImgId = profileimg.id
    ORDER BY RAND();";
}


?>