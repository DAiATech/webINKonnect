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


    <?php } else if ($nivel == 'tatuador') { ?>

        <?php echo $resultprofile['nome']; ?>
            <img src="../../views/tatudor/imgsprofile/<?php echo $resultprofile['profileImgRandomName']; ?>" alt="">

     <?php } else {
        echo "nivel invalido";
    } ?> alt="imagem de perfil do tatuador">



    <?php
    while ($resultprofile) { ?>


        <?php echo $resultprofile['postagemImgRandomName']; ?>


    <?php } ?>



</div>