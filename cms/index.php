<!DOCTYPE html>
<html lang="en">
<?php include("../models/conexao.php");
session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./views/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INKonnect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

</head>

<body>

    <div class="fixed-column col-3" style="left: 0;"><!-- Coluna Fixa Esquerda -->
        <!-- Conteúdo da coluna fixa -->

        <div class="header-logo">
            <img src="../img/inklogo.png" alt="Logo INKonnect" class="logo">
        </div>

        <a href="models/feed.php" target="centro">
            <div class="menu-item">
                <p class="menu-label"><img src="../img/feed.png" alt="Icone Feed" class="menu-icon"> Feed</p>
            </div>
        </a>
        <a href="models/perfil.php" target="centro">
            <div class="menu-item">
                <p class="menu-label"><img src="../img/linhaperfil.png" alt="Icone Feed" class="menu-icon"> Perfil</p>
            </div>
        </a>

        <?php
        if ($_SESSION["nivel"] == 'cliente') {
            echo '<a href="models/discover.php" target="centro">
            <div class="menu-item">
                <p class="menu-label"><img src="../img/compass.png" alt="Icone Discover" class="menu-icon"> Discover</p>
            </div>
        </a>';
        } else {
            echo '';
        }
        ?>
        <a href="controllers/logout.php">
            <div class="menu-item">
                <p class="logout">Sair</p>
            </div>
        </a>
        <div class="agenda">
            <iframe
                src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23616161&ctz=America%2FSao_Paulo&showTitle=0&showNav=1&showDate=1&showPrint=0&showTabs=1&showCalendars=0&src=cHQtYnIuYnJhemlsaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%230B8043"
                style="border:solid 1px #777" width="390" height="359" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>

    <div class="scrollable-column col-6" id="content"> <!-- Coluna Rolável que muda o conteudo do Iframe -->
        <iframe name="centro" height="100%" width="100%" src="models/perfil.php" frameborder="0">
            <?php include("models/feed.php") ?>

        </iframe>
        <?php
        if ($_SESSION["nivel"] == 'tatuador') {
            echo '<a href="models/novo_post.php" target="centro">
            <div class="botao">
                <img src="../img/plusicon.png" height="40px" alt="">
            </div>
        </a>';
        } else {
            echo '';
        }
        ?>
    </div>



    <div class="fixed-column col-3 p-5 " style="right: 0;"><!-- Coluna Fixa Direita -->
        <!-- Conteúdo da coluna fixa -->
        <div class="header-chat">
            <p class="menu-label">Chat</p>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>