<?php

    require_once("../../config.php");

    if(isset($_POST['ajouter']))
    {
        if(empty($_POST['name_computer']))
        {
            echo ' Veuillez remplir tous les champs ! ';
        }
        else
        {
            $name_computer = $_POST['name_computer'];
            $used_computer = $_POST['used_computer'];

            $query = " INSERT INTO computers (name_computer, used_computer) values('$name_computer', '$used_computer')";
            $result = mysqli_query($db, $query);

            if($result)
            {
                header("location:../../gestion_ordinateurs.php");
            }
            else
            {
                echo '  Veuillez vérifier votre requête ! ';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="fr" class="design-page-html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="icon" type="image/png" href="../../images/desktop.png"/>
    <title>Ajouter un ordinateur</title>
</head>
<body class="design-page-body">
<div class="formcontainer">
    <div class="container">

        <form action="add_ordinateur.php" method="post">
            
            <h2> Ajouter un nouvel ordinateur </h2>

            <input type="text" placeholder=" Entrez le nom du poste " name="name_computer">
            <!-- <input type="number" placeholder=" Numéro " name="used_computer"> -->
            <input type="text" placeholder="Ordinateur occupé ou non " name="used_computer">
            
            <div class="btn">
                <button name="ajouter">Ajouter</button>
            <div class="container" style="background-color: #eee"> </div>
            
        </form>
    </div>
</div>
</body>
</html>