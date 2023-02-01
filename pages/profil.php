<?php

// Initialiser la session
session_start();

// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
    if(!isset($_SESSION["login"])){
    header("Location: connexion.php"); 
    }


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../config/style.css" rel="stylesheet">
    <title>Livre d'Or</title>
</head>

<header>
<!--Header-->
<?php
include_once('../config/header.php');
?>
<!--Fin Header-->
</header>
<body>

<?php
var_dump($_POST);
?>



<!-- PROFIL -->


 <!-- Personalisation de l'accueil -->
<div class="sucess">
    <h1>Bienvenue 

        <?php echo $_SESSION['login']; ?>

    !</h1>
    <br>
    <p>C'est votre tableau de bord.</p>
    <br><br>
    <div class="deco">
    <a href="../config/logout.php">Déconnexion</a>
    </div>
</div>  


<!-- fin -->






<!--Footer-->    
<footer>     
<?php
include_once('../config/footer.php');
?>
</footer>
<!--Fin Footer-->

</body>
</html>