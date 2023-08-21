<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/cadastro.css">
    <script type="text/javascript" src="../js/cadastro.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SING-UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>
<?php include("../models/conexao.php") ?>

<body>
    <div class="container">
        <div id="login">
            <div id="head">
                <img src="../img/inklogo.svg" id="logo" alt="logoink">
                <p>Acesso Profissional</p>
            </div>
            <form action="../controllers/config.php"  enctype="multipart/form-data" method="post"> <!-- action é a ação do botao que ta dentro do form -->
                <div id="inserts">
                    <div class="insert">
                        <label id="labelNome" for="nome">Nome:</label>
                        <input id="nome" name="nome" placeholder="Igor Gomes" type="text" required>
                    </div>
                    <div class="insert">
                        <label id="labelEmail" for="email">Email:</label>
                        <input id="email" name="email" placeholder="amanda@exemplo" type="email" name="email" required
                            class="fs-6">
                    </div>
                    <div class="insert">
                        <label id="labelSenha" for="senha">Senha:</label>
                        <input id="senha" name="senha" placeholder="•••••••" type="password" id="password"
                            name="password" required>
                    </div>
                    <div class="insert">
                        <label id="labelConfirmSenha" for="confirmsenha">Confirmar senha:</label>
                        <input id="confirmSenha" name="confirmsenha" placeholder="•••••••" type="password"
                            name="password" required>
                    </div>
                </div>
                <hr class="divider">
                <div id="submits">
                    <div class="sla">
                        <button type="submit" name="submit" class="botao">Avançar</button>
                    </div>
                </div>
            </form>
        </div>


    </div>

    </div>

</body>

</html>