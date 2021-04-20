<?php 

    require_once("../../config.php");

    $id_user = $_GET['GetID'];
    $query = " SELECT * FROM users WHERE id_user='".$id_user."'";
    $result = mysqli_query($db,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id_user = $row['id_user'];
        $lastName_user = $row['lastName_user'];
        $firstName_user = $row['firstName_user'];
    }

?>

<!DOCTYPE html>
<html class="design-page-html">
  <title>Modifier un utilisateur</title>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../../images/icone.png"/>
    <link rel="stylesheet" href="../../css/styles.css">
  </head>
<body class="design-page-body">
    <div class="formcontainer">
        <div class="container">
            <form action="update_utilisateur.php?Id=<?php echo $id_user ?>" method="post">
                <h2>Modifier l'utilisateur</h2>

                    <label for="nom"><strong>Nom:</strong></label>
                        <input type="text" placeholder=" Entrez le nouveau nom " name="lastName_user" value="<?php echo $lastName_user ?>">

                    <label for="prenom"><strong>Prenom:</strong></label>
                      <input type="text" placeholder=" Entrez le nouveau prenom " name="firstName_user" value="<?php echo $firstName_user ?>">

                <div class="btn">
                <button name="update"><strong>Modifier</strong></button>
                <div class="container" style="background-color: #eee">
                </div>
            </form>
        </div>
    </div>
</body>
</html>