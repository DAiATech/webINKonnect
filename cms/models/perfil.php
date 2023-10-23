<div class="container">
    <link rel="stylesheet" href="../views/css/style.css">
    <?php
    include("consultas.php");
    include("../../models/conexao.php");
    $getInfoPosts = getInfoPosts();
    $dadosprofile = mysqli_query($conexao, $getInfoPosts);

    while ($resultprofile = mysqli_fetch_array($dadosprofile)) {?>
        
        <?php echo $resultprofile['descricao']; ?>
        <?php echo $resultprofile['estilo']; ?>

    <?php
    }
    ?>

    

</div>