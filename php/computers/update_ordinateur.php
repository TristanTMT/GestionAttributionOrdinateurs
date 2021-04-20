<?php 

    require_once("../../config.php");

    if(isset($_POST['update']))
    {
        $id_computer = $_GET['Id'];
        $name_computer = $_POST['name_computer'];

        $query = " UPDATE computers SET id_computer = '".$id_computer."', name_computer='".$name_computer."' WHERE id_computer='".$id_computer."'";
        $result = mysqli_query($db, $query);

        if($result)
        {
            header("location:../../gestion_ordinateurs.php");
        }
        else
        {
            echo ' Veuillez vérifier votre requête ! ';
        }
    }
    else
    {
        header("location:../../gestion_ordinateurs.php");
    }

?>

