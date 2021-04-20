<?php
// Initialiser la session
session_start();

// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if(!isset($_SESSION["Admin"]))
{
    header("Location: Connexion/connexion.php");
    exit();     

}
    require_once("config.php");
    $query = " SELECT * from users ";
    $result = mysqli_query($db,$query);
    $repRacine = true; //pour l'affichage des fichiers dans un dossier dans la racine.
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/desktop.png"/>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="Navigation/css/styles.css">
    <title>Gestion des utilisateurs</title>
    
    <?php 
    
        include 'Navigation/navigation.php';

    ?>


</head>

<body>

    <div class="contenu_site">

        <header > 
            <center>
                <h1> Liste des utilisateurs: </h1> <br>
            </center>
        </header>

        <div class="tableau">
            <table>
                <tr>
                    <th scope="col"> Nom</th>
                    <th scope="col"> Prenom</th>
                    <th scope="col"> Modifier</th>
                    <th scope="col"> Supprimer</th>
                </tr>

                <?php 
                    /* Affichage utilisateurs */
                    while($row= mysqli_fetch_assoc($result))
                    {
                        $id_user = $row['id_user'];
                        $lastName_user = $row['lastName_user'];
                        $firstName_user = $row['firstName_user'];
                ?>
                    <tr>
                        <td><?php echo $lastName_user ?></td>
                        <td><?php echo $firstName_user ?></td>
                        
                        <!-- Modifier utilisateur -->
                        <td><a href="php/users/modifier_utilisateur.php?GetID=<?php echo $id_user ?>"> <img id="icon_modif" src="images/icone_modif.png"> </a></td>
                        
                        <!-- Supprimer utilisateur -->
                        <td><a href="php/users/delete_utilisateur.php?Supp=<?php echo $id_user ?>"> <img id="icon_del" src="images/icone_del.png"> </a></td>
                    </tr>        
                <?php 
                        }
                ?>                                                                    
            
            </table>
            
            <!-- Ajouter utilisateur -->
            <div class="text_Ajout">
                <a href="php/users/add_utilisateur.php"> <div class="img_add"> <img src="images/icone_add.png"> Ajouter un nouvel utilisateur </div></a>
            </div>
        </div>    
    </div>
</body>
</html>