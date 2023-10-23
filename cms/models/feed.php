<div class="container">
    <link rel="stylesheet" href="../views/css/style.css">
    <?php
    include("consultas.php");
    include("../../models/conexao.php");
    $getInfoPosts = getInfoPosts();
    $dadosprofile = mysqli_query($conexao, $getInfoPosts);

    while ($resultprofile = mysqli_fetch_array($dadosprofile)) {?>

        
        <img src="../../views/tatuador/imgsprofile/<?php echo $resultprofile['profileImgRandomName']; ?>" alt="imagem de perfil">         
        <img src="../views/tatuador/imgsposts/<?php echo $resultprofile['postagemImgRandomName']; ?>" alt="imagem da postagem">         

        <?php echo $resultprofile['descricao']; ?>
        <?php echo $resultprofile['estilo']; ?>

    <?php
    }
    ?>

    

</div>