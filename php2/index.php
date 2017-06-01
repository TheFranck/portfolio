<?php 

require_once("template/head.php");


session_start(); // Fonction php afin d'initialiser la session

if(isset($_SESSION["error"])){ // si la variable SESSION error existe 
    echo $_SESSION["error"];// On affiche l'erreur'
    unset($_SESSION["error"]); // on enlève la session error une fois la connection réussie                         
}

if(isset($_SESSION["connected"]) && $_SESSION["connected"] == True) { //
    require_once("template/home.php"); // si le script est vrai (true) alors il va sur home.php
} else {
    require_once("template/login.php"); // si le script est faux il revient sur la page de connection 
}

    require_once("template/footer.php"); // va chercher élément footer.php 
?>

                
           
