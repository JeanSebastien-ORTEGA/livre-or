<?php
$message = null;
require_once('../config/process-comments.php');


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
<?php
require('../config/config.php');
?>

<!-- COMMENTAIRES -->

<div class="containerform-com">
    <div id="comment">
    <h2 class="title" >Mon site vous plaît ? <br> Laissez-moi un message !</h2>
      <br>
        <form method="POST" class="form-comment">

            <div class="group-com">
                <input name="Login" type="text" style="text" placeholder="Login" required/><br>
            </div>
                
            <div class="group-com">
                <textarea type="text" cols="60" rows="5" name="commentaire" placeholder="Commentaire" required ></textarea>
            </div>

            <div class="group-com">
                <input type="submit" name="submit" id="submitcom" value="Laisser un commentaire.">
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