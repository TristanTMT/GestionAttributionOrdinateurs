<?php
require('../config.php');
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/png" href="../images/icone-ordinateur.png"/>
    <title>Gestion d'attribution d'ordinateurs</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/desktop.png"/>
    <link rel="stylesheet" href="css/styles.css">


<style>
    .msg-erreur{
        text-align: center;
        color: red;
        font-weight: bold;
    }
</style>

</head>

<body>

    <!-- Container page principale -->
    <div class="container"> 
            
        <!-- Container du formulaire + login -->
        <div class="container_login_form"> 
            
            <!-- Début du formulaire -->
            <form action="login.php" class="login_form" method="POST">
                <div class="header_form">
                    <span class="img_admin"><img src="./images/teamwork.png"></img></span>
                </div>
                
                <!-- DEBUT EMAIL -->
                    <p>Email:</p>
                    <input type="text" name="mailconnect" placeholder="Entrez votre email" >            
                <!-- FIN EMAIL -->

                <!-- DEBUT MOT DE PASSE -->
                    <p>Mot de passe:</p>
                    <input type="password" name="mdpconnect"  placeholder="Entrez votre mot de passe" >
                <!-- FIN MOT DE PASSE -->
                
                <!-- DEBUT BOUTON -->
                    <input type="submit" name="btnConnexion"  value="Se connecter">
                
                <!-- FIN BOUTON -->


                <!-- Si tout les champs ne sont pas remplis -->
                <?php
                if(@$_GET['erreur']==true)
                {
                ?>
                    <div class="msg-erreur"> <?php echo $_GET['erreur'] ?></div>
                <?php
                }
                ?>

                <!-- Si tout l'email ou le mdp n'est pas correct -->
                <?php
                if(@$_GET['Invalide']==true)
                {
                ?>
                    <div class="msg-erreur"> <?php echo $_GET['Invalide'] ?></div>
                <?php
                }
                ?>
            
            </form>
        </div>
    </div>

</body>
</html>