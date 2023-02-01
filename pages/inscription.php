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
<!-- INSCRIPTION -->

<?php
var_dump($_POST);
?>


<?php
require('../config/config.php');
if (isset($_REQUEST['login'], $_REQUEST['password'])){

  // récupérer le login 
  $login = stripslashes($_REQUEST['login']);
  $login = mysqli_real_escape_string($conn, $login);
  // récupérer le mot de passe 
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  

    $query = "INSERT INTO `utilisateurs`(`login`, `password`)
              VALUES ('$login', '$password')";
  // Exécuter la requête sur la base de données

    $res = mysqli_query($conn, $query);
    if($res){
        $message = "Vous êtes inscrit avec succès !";
    }
}else{}

?>

<div class="containerform">
        <div id="login">       
            
    <?php if (! empty($message)) { ?>
    <p class="inscriptonreussite"><?php echo $message; ?></p>
    <?php } ?>


          <h1 class="title">Inscription</h1>
          <p class="paragraphe"> Veuillez remplir tous les champs</p>
            <form method="POST" class="form-log" name="inscription">
                <div class="group-form">
                    <input type="text" name="login" placeholder="Login" required>
                </div>
                <div class="group-form">
                    <input type="password" name="password" placeholder="Password" required> 
                </div>
                <div class="group-form">
                    <input type="submit" name="submit" class="submit" value="S'inscrire">
                </div>

    

            </form>
        </div>
    </div>


<!--Footer-->    
<footer>     
<?php
include_once('../config/footer.php');
?>
</footer>
<!--Fin Footer-->

</body>
</html>