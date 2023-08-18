<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'inkonnect';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno){
    //     echo "Erro";
    // }
    // else{
    //     echo "Conexao efetuada com sucesso";
    // }
?>