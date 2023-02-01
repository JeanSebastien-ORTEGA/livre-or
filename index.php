<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="config/style1.css" rel="stylesheet">
    <title>Livre d'Or</title>
</head>
<!--Header-->
<?php
include_once('config/header.php');
?>
<!--Fin Header-->
<body>

<?php
var_dump($_POST);
?>

<!--Titre Body-->

<h1>Index Livre d'Or a changer</h1>




<div class="containerTime">
        <div id="Time-Date">
          <h1 class="title">Bienvenue</h1>
          <br>
            <form method="POST" class="form-log" name="connexion">
                <div class="group-form">
                    <p>
                    <?php
                    // Set FR date et heure
                    
date_default_timezone_set('Europe/Paris');
$date = date('D-M-Y');
$time = date('h:i');
echo $date . "<br>"; 
echo $time;
                    ?>
                    </p>
                </div>
                
                <div class="lien-inscription"><br>
                <a href="inscription.php">Inscrivez-vous !</a>
                </div>

    <?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>

            </form>
        </div>
    </div>

<!--Footer-->
<?php
include_once('config/footer.php');
?>
<!--Fin Footer-->
</body>
</html>