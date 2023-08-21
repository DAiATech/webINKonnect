<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/cadastro2.css">
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
            <form action="cadastro2.php" method="post">
                <div id="inserts">
                    <div class="insert">
                        <label id="labelNomeS" for="usuario">Nome do Estudio:</label>
                        <input id="nomes" name="nomeestudio" placeholder="Igor Tatto" type="text" required>
                    </div>
                    <div class="insert">
                        <label id="labelTelefone" for="telefone">Telefone:</label>
                        <input id="telefone" placeholder="(00)00000-0000" type="tel" name="telefone" required
                            class="fs-6">
                    </div>
                    <div class="insert">
                        <label id="labelEspecialidade" for="especialidade">Especialidade:</label>
                        <input id="especialidade" name="especialidade" placeholder="Tribal" type="text">
                    </div>
                    <div class="insert">
                        <label id="labelEndereco" for="endereco">Endereço:</label>
                        <input id="endereco" name="endereco" placeholder="rua Sao José" type="text" required>
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