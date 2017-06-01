<?php 
    session_start(); // stocker des choses en sessions
    
    // Definit l'utilisateur et le mot de passe '
    $user = "franck";
    $password = "0000";
    if($_POST["user"] == $user && $_POST["password"] == $password) {
       // echo "Connection";
       $_SESSION["connected"] = True; // Valide la connection 
        header('Location: ../index.php'); // il va aller dans index.php
    } else {
        $_SESSION["error"] = " Mot de passe ou utilisateur erroné";
        header('Location: ../index.php');
        // echo "No Connection ";
    }

?>