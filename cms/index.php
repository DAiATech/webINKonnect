<!DOCTYPE html>
<html lang="en">
<?php include("../models/conexao.php"); ?>

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
    <script>
        function showPage(page) {
            //pega o conteudo da coluna rolável pelo id='content'
            var content = document.getElementById("content");
            // limpa o conteudo da coluna rolável
            content.innerHTML = '';

            if (page == 'profile') {
                content.innerHTML = <?php include("models/perfil.php"); ?>;
            }
            else if (page == 'feed') {
                content.innerHTML = '<?php include("models/feed.php"); ?>';
            }
            else {
                erro;
            }
        }
    </script>

    <div class="fixed-column col-3" style="left: 0;"><!-- Coluna Fixa Esquerda -->
        <!-- Conteúdo da coluna fixa -->

        <div class="header-logo">
            <img src="../img/inklogo.png" alt="Logo INKonnect" class="logo">
        </div>

        <a href="#" onclick=" showPage('feed') ">
            <div class="menu-item">
                <p class="menu-label"><img src="../img/feed.png" alt="Icone Feed" class="menu-icon"> Feed</p>
            </div>
        </a>
        <br>
        <a href="#" onclick="showPage('profile')">
            <div class="menu-item">
                <p class="menu-label"><img src="../img/linhaperfil.png" alt="Icone Feed" class="menu-icon"> Perfil</p>
            </div>
        </a>
    </div>

    <div class="scrollable-column col-6" id="content"><!-- Coluna Rolável -->
        <!-- Conteúdo da coluna rolável (que vai ser ajustado dinamicamente com o JS abaixo)-->
        <?php include("models/feed.php"); ?>
    </div>

    <div class="fixed-column col-3 p-5 " style="right: 0;"><!-- Coluna Fixa Direita -->
        <!-- Conteúdo da coluna fixa -->
        <div class="header-chat">
            <p class="menu-label">Chat</p>
        </div>

    </div>

</body>

</html>