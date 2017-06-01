<?php // creation du script de deconnexion
    session_start();
    unset($_SESSION["connected"]); // on enlève la variable session connected et renvoyer sur index.php

    header('Location: ../index.php');
?>