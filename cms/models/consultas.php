<?php 
function getInfoProfile() {
    return "";
}
function getInfoPosts() {
    return "SELECT postagenstatuadores.*, tatuador.nome,postagensimg.imgRandomName AS postagemImgRandomName, 
    profileimg.imgRandomName AS profileImgRandomName  
    FROM postagenstatuadores 
    INNER JOIN postagensimg ON imgPostId = postagensimg.id
    INNER JOIN tatuador ON tatuadorId = tatuador.id
    INNER JOIN profileimg ON tatuador.profileImgId = profileimg.id
    ORDER BY RAND();";
}


?>