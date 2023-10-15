<?php
include("../../models/conexao.php");
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_SESSION["nome"] = $_POST["nome"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["password_confirmation"] = $_POST["password_confirmation"];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../css/cadastro2.css">
    <script type="text/javascript" src="../js/cadastro.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SING-UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>

<body>
    <div class="container">
        <div id="login">
            <div id="head">
                <img src="../../img/inklogo.svg" id="logo" alt="logoink">
                <p>Acesso Cliente</p>
            </div>
            <form action="../../controllers/cadastro_cliente.php" enctype="multipart/form-data" method="post">
                <div id="insertsCLiente" class="ps-5">
                    <div class="insertN">
                        <label id="labelNascimento" for="usuario">Nascimento:</label>
                        <input id="nascimento" name="nascimento" type="date" required>
                    </div>
                    <div class="insert">
                        <label id="labelPreferencia" for="preferencia">Preferência de estilos:</label>
                        <input id="preferencia" name="preferencia" placeholder="Tribal" type="text">
                    </div>
                    <div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="99999999">
                        <input type="file" name="arquivo" multiple="" />
                    </div>
                </div>
                <hr class="divider">
                <div id="submits">
                    <div class="sla">
                        <button type="submit" name="submit" class="botao">Finalizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>