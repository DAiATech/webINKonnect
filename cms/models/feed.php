<div class="container">
    <link rel="stylesheet" href="../views/css/style.css">
    <?php
    include("consultas.php");
    include("../../models/conexao.php");
    $getInfoPosts = getInfoPosts();
    $dadosprofile = mysqli_query($conexao, $getInfoPosts);

    while ($resultprofile = mysqli_fetch_array($dadosprofile)) { ?>

        <div class="profile">
            <div class="divImgProfile p-3">
                <img class="imgProfile fluid p-3"
                    src="../../views/tatuador/imgsprofile/<?php echo $resultprofile['profileImgRandomName']; ?>"
                    alt="imagem de perfil">
            </div>
            <div class="m-3">
                <p>
                    <?php echo $resultprofile['nome']; ?>
                </p>
            </div>
        </div>

        <div class="img-container">
            <img src="../views/tatuador/imgsposts/<?php echo $resultprofile['postagemImgRandomName']; ?>"
                alt="imagem da postagem">
        </div>
        <div class="info-posts">

            <?php echo $resultprofile['descricao']; ?>
            <?php echo $resultprofile['estilo']; ?>

        </div>



        <?php
    }
    ?>



</div>