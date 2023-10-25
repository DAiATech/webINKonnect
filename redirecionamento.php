<?php
session_start();
if ($_SESSION["nivel"] == 'cliente' || $_SESSION["nivel"]=='tatuador') {
    header("location:cms/index.php");
}
else {
    echo "como isso foi acontecer krl ???????<hr><a href='index.php'>Voltar</a>";
}
?>