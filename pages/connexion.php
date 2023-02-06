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

<!-- LOGIN -->

<?php
require('../config/config.php');

if (isset($_POST['login'])){
  $login = stripslashes($_REQUEST['login']);
  $login = mysqli_real_escape_string($conn, $login);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password); 

    $query = "SELECT * FROM `utilisateurs` WHERE
             login='$login' and password='$password'";

  $result = mysqli_query($conn,$query) or die(mysql_error());

  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['login'] = $login;
      header("Location: profil.php");
      
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}


/*   if(mysqli_num_rows($result) == 1){
    $_SESSION['login'] = $login;

    $user = mysqli_fetch_assoc($result);
    
    // vérifier si l'utilisateur est un administrateur ou un utilisateur
    if ($user['id'] == '1') {
      header('location: admin.php');      
    }else{
      header('location: profil.php');
    }
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
} */


?>
<div class="containerform">
        <div id="login">
          <h1 class="title">Connexion</h1>
          <br>
            <form method="POST" class="form-log" name="connexion">
                <div class="group-form">
                    <input type="text" name="login" placeholder="Login">
                </div>
                <div class="group-form">
                    <input type="password" name="password" placeholder="Password" required> 
                </div>
                <div class="group-form">
                    <input type="submit" name="submit" class="submit" value="Connexion">
                </div>
                
                <div class="lien-inscription">Pas encore member ? <br>
                <a href="inscription.php">Inscrivez-vous !</a>
                </div>

    <?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>

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