<?php
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$banco = "appinkonnect";
$pdo = new PDO('mysql:host=127.0.0.1;dbname=appinkonnect','root','');
$conexao =  mysqli_connect($servidor, $usuario, $senha);
            mysqli_select_db($conexao, $banco);
            mysqli_set_charset($conexao, "UTF8");
/*  if ($conexao) {
     echo "conectado";
 } else {
     echo "erro"; } */
?>