<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="config/style.css" rel="stylesheet">
    <title>Livre d'Or</title>
</head>
<!-- HEADER BAR NAV -->
<header>
    <div class="sectionheader">
        <div class="logoheader">
            <img src="ressources/GGG.png">
        </div>

            <?php
            if(isset($_SESSION['login'])) {
            ?>
                    <nav class="nav">
                        <li><a href="../pages/livre-or.php">Livre d'Or</a></li>
                        <li><a href="../pages/profil.php">Mon profil</a></li>
                        <li><a href="../config/logout.php">Se déconnecter</a></li> 
                    </nav>
                        
            <?php
            } else {
            ?>
                    <nav class="nav">
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="pages/connexion.php">Se connecter</a></li>
                    </nav>
                    
            <?php
            }
            ?>

    </div>
    <hr class="hrheader">
    <br>
</header>
<body>
</body>
</html>