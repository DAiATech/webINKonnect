<div class="container">
    <link rel="stylesheet" href="../views/css/style.css">
    <?php
    include("consultas.php");
    include("../../models/conexao.php");
    $getInfoPosts = getInfoPosts();
    $dadosprofile = mysqli_query($conexao, $getInfoPosts);

    while ($resultprofile = mysqli_fetch_array($dadosprofile)) { ?>
        <div class="container-posts"> <!-- div que vai cercar todos os posts -->

            <div class="profile"> <!-- div onde vão ficar a parte do perfil em cada post -->
                <div class="divImgProfile p-3">
                    <img class="user-img-feed fluid p-3"
                        src="../../views/tatuador/imgsprofile/<?php echo $resultprofile['profileImgRandomName']; ?>"
                        alt="imagem de perfil">
                </div>

                <div class="m-3">
                    <p class="user-name-feed">
                        <?php echo $resultprofile['nome']; ?>
                    </p>
                </div>
            </div>
            <div class="info-posts"> <!-- div onde ficam as descrições do post (legenda e tags/estilos) -->
                <p class="descricao-post">
                    <?php echo $resultprofile['descricao']; ?>
                </p>
                <p class="estilo-post">
                    <?php echo $resultprofile['estilo']; ?>
                </p>



            </div>

            <div class="img-container"> <!-- a imagem do post (limitada a um por enquanto ) -->
                <img id="img-radius" src="../views/tatuador/imgsposts/<?php echo $resultprofile['postagemImgRandomName']; ?>"
                    alt="imagem da postagem">
            </div>

            <hr class="divider">


        </div>

    <?php } ?>



</div>