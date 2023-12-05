<div class="container">
    <link rel="stylesheet" href="../views/css/style.css">
    <?php
    include("consultas.php");
    include("../../models/conexao.php");

    if (isset($_SESSION["nivel"]) && $_SESSION["nivel"] == 'cliente') {
        $getInfoProfile = getInfoProfileUser();
        $nivel = 'cliente';

    } elseif (isset($_SESSION["nivel"]) && $_SESSION["nivel"] == 'tatuador') {
        $getInfoProfile = getInfoProfileTatuador();
        $nivel = 'tatuador';
    } else {
        echo 'erro, nenhuma sessão disponível';
    }
    $dadosprofile = mysqli_query($conexao, $getInfoProfile);
    $resultprofile = mysqli_fetch_array($dadosprofile);

    if ($nivel == 'cliente') { ?>

        <div class="container">

            <div class="info-profile"></div>
            <!-- div onde vão ficar a header da página de perfil, com o banner, a foto de perfil e o nome do usuario -->

            <img class="user-img user-img-margin" id="" src="..\..\views\cliente\imgsprofile\<?php echo $resultprofile['imagemProfile'] ?>"
                alt="">
            <p class="user-name">
                <?php echo $resultprofile['nome']; ?>
            </p>
        </div>


    <?php } else if ($nivel == 'tatuador') { ?>
            <div> <!-- div onde vão ficar a header da página de perfil, com o banner, a foto de perfil e o nome do usuario -->
                <div class="info-profile"></div>
                <img class="user-img user-img-margin"
                    src="..\..\views\tatuador\imgsprofile\<?php echo $resultprofile['profileImgRandomName'] ?>" alt="">

                <p class="user-name">
                <?php echo $resultprofile['nome']; ?>
                </p>
            </div>


            <?php
            $getInfoPosts = getPostsTatuador();
            $dadosPosts = mysqli_query($conexao, $getInfoPosts);

            while ($resultInfoPosts = mysqli_fetch_array($dadosPosts)) { ?>
                <div class="container-posts"> <!-- div que vai cercar todos os posts -->

                    <div class="profile"> <!-- div onde vão ficar a parte do perfil em cada post -->
                        <div class="divImgProfile p-3">
                            <img class="imgProfile fluid p-3"
                                src="../../views/tatuador/imgsprofile/<?php echo $resultInfoPosts['profileImgRandomName']; ?>"
                                alt="imagem de perfil">
                        </div>
                        <div class="m-3">
                            <p>
                            <?php echo $resultInfoPosts['nome']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="img-container"> <!-- a imagem do post (limitada a um por enquanto ) -->
                        <img src="../views/tatuador/imgsposts/<?php echo $resultInfoPosts['postagemImgRandomName']; ?>"
                            alt="imagem da postagem">
                    </div>

                    <div class="info-posts"> <!-- div onde ficam as descrições do post (legenda e tags/estilos) -->

                    <?php echo $resultInfoPosts['descricao']; ?>
                    <?php echo $resultInfoPosts['estilo']; ?>

                    </div>
                </div>
        <?php } ?>

    <?php } else {
        echo "nivel invalido";
    } ?>


</div>