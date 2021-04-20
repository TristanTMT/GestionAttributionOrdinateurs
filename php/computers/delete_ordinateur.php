<?php 

        require_once("../../config.php "); // connexion a la base de donnée

        if(isset($_GET['Supp']))
        {
            $id_computer = $_GET['Supp'];
            $query = " DELETE FROM computers WHERE id_computer = '".$id_computer."'";
            $result = mysqli_query($db, $query);

            if($result)
            {
                header("location:../../gestion_ordinateurs.php");
                
            }
            else
            {
                echo ' Veuillez verifier votre requête ! ';
            }
        }
        else
        {
            header("location:../../gestion_ordinateurs.php");
        }

?>