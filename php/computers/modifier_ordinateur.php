<?php 

    require_once("../../config.php");
    $id_computer = $_GET['GetID'];
    $query = " SELECT * from computers where id_computer='".$id_computer."'";
    $result = mysqli_query($db,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id_computer = $row['id_computer'];
        $name_computer = $row['name_computer'];
    }

?>

<!DOCTYPE html>
<html lang="fr" class="design-page-html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="icon" type="image/png" href="../../images/icone.png"/>
    
    <title>Modifier un ordinateur</title>
</head>
<body class="design-page-body">
<div class="formcontainer">
    <div class="container">

        <form action="update_ordinateur.php?Id=<?php echo $id_computer ?>" method="post">
            
            <h2> Modifier un ordinateur </h2>

            <input type="text" placeholder=" Entrez le nouveau nom du poste " name="name_computer" value="<?php echo $name_computer ?>">

            <div class="btn">
                <button name="update">Modifier</button>
            <div class="container" style="background-color: #eee">
            </div>
        </form>
    </div>
</div>   
</body>
</html>