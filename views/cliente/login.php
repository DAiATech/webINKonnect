<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include("../../models/conexao.php") ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <script type="text/javascript" src="../../js/login.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SING-IN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>
<body>
    <div class="container">
        <div id="frame">
            <div id="head">
                <img src="../../img/inklogo.svg" id="logo" alt="logoink">
                <p>Acesso Cliente</p>
            </div>
            <form action="../../controllers/validarlogin.php?nivel=cliente" method="post">
                <div id="inserts">
                    <div class="insert">
                        <label id="usuario" for="email">Email:</label>
                        <input id="userLabel" placeholder="daiatech@exemplo.com" type="email" name="email" class="fs-6" required>
                    </div>
                    <br>
                    <div class="insert">
                        <label id="senha" for="password">Senha:</label>
                        <input id="senhaLabel" placeholder="•••••••" type="password" name="password" required>
                    </div>
                    <hr class="divider">
                </div>

                <div id="submitsform">
                    <div class="botao">
                        <button type="submit">Entrar</button>
                    </div>
                    <a class='botao' href="cadastro.php">
                        <button>Cadastrar</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>