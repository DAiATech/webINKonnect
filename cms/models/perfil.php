<div class="container">
    <link rel="stylesheet" href="../views/css/style.css">
    <?php
    include("consultas.php");
    include("../../models/conexao.php");
    $getInfoProfile = getInfoProfile();
    $dadosprofile = mysqli_query($conexao, $getInfoProfile);
    echo "id = $id" ;
    while ($resultprofile = mysqli_fetch_array($dadosprofile)) { ?>

        <?php echo $resultprofile['descricao']; ?>


    <?php } ?>



</div>