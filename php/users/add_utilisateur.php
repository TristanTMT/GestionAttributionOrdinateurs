<?php

   include("../../config.php");

    if(isset($_POST['ajouter']))
    {
        if(empty($_POST['lastName_user']) || empty($_POST['firstName_user']))
        {
            echo ' Veuillez remplir tous les champs ! ';
        }
        else
        {
            $lastName_user = $_POST['lastName_user'];
            $firstName_user = $_POST['firstName_user'];

            $query = "INSERT INTO users (lastName_user, firstName_user) VALUES('$lastName_user','$firstName_user')";
            $result = $db->query($query);

            if($result)
            {
                header("location:../../gestion_utilisateurs.php");
            }
            else
            {
                echo '  Veuillez vérifier votre requête ! ';
            }
        }
    }

    $db->close();
?>

    <!DOCTYPE html>
    <html lang="fr" class="design-page-html">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="../../css/styles.css">
        <link rel="icon" type="image/png" href="../../images/desktop.png"/>        
        <title>Ajouter un utilisateur</title>
    
    
    </head>
    <body class="design-page-body">
    <div class="formcontainer">
            <div class="container">
    
        
        <form action="add_utilisateur.php" method="post">
    
            <h2> Ajouter un nouvel utilisateur </h2>
    
                <input type="text" placeholder=" Entrez le nom de l'utilisateur " name="lastName_user">
            
                <input type="text" placeholder=" Entrez le prenom de l'utilisateur " name="firstName_user">
                
            
            <div class="btn">
                <button name="ajouter">Ajouter</button>
            <div class="container" style="background-color: #eee">
            </div>
        </form>
        
    </body>
    </html>