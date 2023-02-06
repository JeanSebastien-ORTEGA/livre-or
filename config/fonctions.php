<?php

function CheckLog(){

// Initialiser la session
session_start();

// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
    if(!isset($_SESSION["login"])){
    header("Location: connexion.php"); 
    }
  }
  
?>

<?php


?>