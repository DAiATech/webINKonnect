<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "inkonnect";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$estudio = $_POST['nomeestudio'];
$telefone = $_POST['telefone'];
$especialidade = $_POST['especialidade'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO usuarios (nome, email, senha, estudio, telefone, especialidade, endereco) VALUES ('$nome', '$email', '$senha', '$estudio', '$telefone', '$especialidade', '$endereco')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>
