<?php 

require_once("../../config.php");


if( isset($_GET['supp']) && $_GET['supp'] == "attribution" ) {

    $id_attribution = $_GET['idcomputer_user'];
    $table_attribution = mysqli_query($db, "SELECT * FROM computer_user WHERE idcomputer_user = '".$id_attribution."'");
    $liste_table_attribution = mysqli_fetch_array($table_attribution);

    $supp_attribution = mysqli_query($db, "DELETE FROM computer_user WHERE idcomputer_user = '".$id_attribution."'");
    if( $supp_attribution ) {
      
    	//Réactualise les valeurs pour que les utilisateurs non disponible le redevienne.
    	$utilisateur_avec_ordinateur = mysqli_query($db, "UPDATE users SET use_computer = '0' WHERE id_user = '".$liste_table_attribution['user_id_reservation']."'");
    	//Réactualise les valeurs pour que les ordinateurs non disponible le redevienne.
    	$ordinateur_occuper = mysqli_query($db, "UPDATE computers SET used_computer = 'Non' WHERE id_computer = '".$liste_table_attribution['computer_id']."'");
      
        header("location:../../gestion_attribution.php");
        
    	die;
    }
    
}
?>