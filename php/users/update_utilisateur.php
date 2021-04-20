<?php 

    require_once("../../config.php");

    if(isset($_POST['update']))
    {
        $id_user = $_GET['Id'];
        $lastName_user = $_POST['lastName_user'];
        $firstName_user = $_POST['firstName_user'];

        $query = " UPDATE users SET id_user = '".$id_user."', lastName_user='".$lastName_user."',firstName_user='".$firstName_user."' where id_user='".$id_user."'";
        $result = mysqli_query($db,$query);

        if($result)
        {
            header("location:../../gestion_utilisateurs.php");
        }
        else
        {
            echo ' Veuillez vérifier votre requête ! ';
        }
    }
    else
    {
        header("location:../../gestion_utilisateurs.php");
    }

?>

