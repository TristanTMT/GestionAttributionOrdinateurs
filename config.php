<?php

    $server = "localhost";
    $user = "root";
    $password = "legion162450";
    $dbname = "test_simplon";

    $db=mysqli_connect($server, $user, $password, $dbname); 
    
    if(!$db) 
    { 
        die(" Erreur de connexion "); 
    } 
