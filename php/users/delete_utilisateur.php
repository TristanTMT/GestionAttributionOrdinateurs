<?php 

        require_once("../../config.php "); // connexion a la base de donnée

        if(isset($_GET['Supp']))
        {
            $id_user = $_GET['Supp'];
            $query = " DELETE FROM users WHERE id_user = '".$id_user."'";
            $result = mysqli_query($db, $query);

            if($result)
            {
                header("location:../../gestion_utilisateurs.php");
                
            }
            else
            {
                echo ' Veuillez verifier votre requête ! ';
            }
        }
        else
        {
            header("location:../../gestion_utilisateurs.php");
        }

?>