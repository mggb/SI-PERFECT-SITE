<?php
var_dump($_POST);
require_once '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poster un message</title>
</head>
<body>
<?php
$edit =" SELECT   
           `id`,      
           `categorie`, 
           `nom`, 
           `description`,
           `lien`,
           `note`,
           `image`
           FROM
            `top100`
            WHERE
            `id`= :id
            ;";
$stmt = $pdo->prepare($edit);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
?>
<a href="../show.php">retourner vers la page show</a>
<?php if (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
    <form  action="doEdit.php" method="post" enctype="multipart/form-data">
        <SELECT name="categorie" size="1">
            <OPTION>bar
            <OPTION>hotel
            <OPTION>re
        </SELECT>
        <input type="text" value="<?=$row["nom"]?>" name="nom" size="12" >
        <input type="text" value="<?=$row["description"]?>" name="description" size="12" >
        <input type="text" value="<?=$row["lien"]?>" name="lien" size="12" >
        <input type="text" value="<?=$row["note"]?>" name="note" size="12" >
        <input type="file" name="image" size="12" placeholder="img src">
        <input  id="prodId" name="id" type="hidden" value="<?=$row["id"]?>">
        <input  value="submit"type="submit" name="submit"  class="envoie">
    </form>
<?php endif;?>
</body>
</html>