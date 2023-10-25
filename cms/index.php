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
        <div class="row menu">
            <div class="col-2"></div>
            <div class="col-8 ">

                <a href="models/feed.php" target="centro">
                    <div class="row">
                        <div class="col-5 menu-img">
                            <img src="../img/feed.png" alt="Icone Feed" class="menu-icon">
                        </div>
                        <div class="col">
                            <p class="menu-label">Feed</p>
                        </div>
                    </div>
                </a>
                <a href="models/perfil.php" target="centro">
                    <div class="row">
                        <div class="col-5 menu-img">
                            <img src="../img/linhaperfil.png" alt="Icone Feed" class="menu-icon"> 
                        </div>
                        <div class="col">
                            <p class="menu-label">Perfil</p>
                        </div>
                    </div>
                </a>
                <?php
                if ($_SESSION["nivel"] == 'cliente') {
                    echo '<a href="models/discover.php" target="centro">
                    <div class="row">
                        <div class="col-5 menu-img">
                            <img src="../img/compass.png" alt="Icone Discover" class="menu-icon">
                        </div>
                        <div class="col">
                            <p class="menu-label">Discover</p>
                        </div>
                    </div>
                </a>';
                } else {
                    echo '';
                }
                ?>
                
                <a href="controllers/logout.php">
                    <div class="menu-item">
                        <div class="row">
                            <div class="col-5 menu-img">
                                <img src="../img/exit.png" alt="Icone Discover" id="exit-icon">
                            </div>
                            <div class="col">
                                <p class="menu-label" id="exit-label">Sair</p>
                            </div>
                        </div>
  
                    </div>
                </a>
                
            </div>
            <div class="col-2"></div>
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