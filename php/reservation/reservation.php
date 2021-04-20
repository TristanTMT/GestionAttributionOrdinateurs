<?php 

require_once("../../config.php");

if( isSET($_GET['reservation']) && $_GET['reservation'] == "ordinateur" ){
	
	
	$nom_utilisateur = $_POST['nom_utilisateur'];
	
	//On récupère la table utilisateurs
	$table_utilisateurs = mysqli_query($db, "SELECT * FROM users WHERE id_user = '".$nom_utilisateur."'"); 
    
    //On met les données sous forme de liste avec "mysqli_fetch_array"
	$liste_table_utilisateurs = mysqli_fetch_array($table_utilisateurs);

	$lastName = $liste_table_utilisateurs['lastName_user'];
	$firstName = $liste_table_utilisateurs['firstName_user'];
	
	
	// Récuperera la valeur de 'horaire' dans la liste déroulante fait dans le fichier "faire_attribution.php"
	$horaire_attribuer = $_POST['horaire_attribuer'];
    
    // Récuperera la valeur de l'id pour identifier le nom de l'ordinateur
	$id_ordinateur = $_POST['id_ordinateur'];

	// date input dans " faire_attribution.php"
	$date_attribuer = $_POST['date_attribuer'];

    //Sélectionne et stocke tout les données de la table ordinateurs dans la variable "$table_ordinateurs"
	$table_ordinateur = mysqli_query($db, "SELECT * FROM computers WHERE id_computer = '".$id_ordinateur."'"); 
    
	/* La fonction "mysqli_fetch_array" retourne une ligne de résultat sous la forme d'un tableau.
	   Ici on va avoir tout les nom des ordinateurs*/
    $liste_table_ordinateurs = mysqli_fetch_array($table_ordinateur);
	$computerName = $liste_table_ordinateurs['name_computer'];

	/* Requête d'insertion pour les attributions */
    $reservation = mysqli_query($db, "INSERT INTO computer_user(computer_id, user_id_reservation, hour, date, lastName,
    firstName,computerName) 
    values('".$id_ordinateur."', '".$nom_utilisateur."', '".$horaire_attribuer."', '".$date_attribuer."', '".$lastName."', '".$firstName."', '".$computerName."')");
    
    if( $reservation ) {
        
		/* Mise à jour au niveau des disponibilités de l'utilisateur
		   Donc changement de valeur "utilise_Ordinateur 0 -> 1" 
		*/
    	$utilisateur_avec_ordinateur = mysqli_query($db, "UPDATE users SET use_computer = '1' WHERE id_user = '".$nom_utilisateur."'");
		
		/* Faire de même pour la disponibilité de l'ordinateur
		   Donc changement de valeur "Occuper Non -> Oui" 
		*/
    	$ordinateur_occuper = mysqli_query($db, "UPDATE computers SET used_computer = 'Oui' WHERE id_computer = '".$id_ordinateur."'");

        header("location:../../gestion_attribution.php");
        
        die;
	} else {
		echo mysqli_error($db);
	}
        
}
?>



