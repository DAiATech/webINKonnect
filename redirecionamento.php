<?php
session_start();
if ($_SESSION["consumidor"] == 1) {
    header("location:cms/index.php");
} elseif ($_SESSION["profissional"] == 1) {
    header("location:profissional/index.php");
} else {
    echo "Você não tem permissão para acessar esta página!<hr><a href='index.php'>Voltar</a>";
}
?>