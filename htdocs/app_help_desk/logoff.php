<?php
    //remover indices

    session_start();
    //unset($_SESSION['Auth']);
    session_destroy();
    header('Location: index.php');

    //unset() - remove indices do array
    //session_destroy - destroi a variavel sessao
?>