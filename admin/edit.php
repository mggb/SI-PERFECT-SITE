<?php
var_dump($_POST);
require_once 'connection.php';
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
           `title`, 
           `image`, 
           `categorie`, 
           `SousCategorie`, 
           `Lieux`, 
           `description`, 
           `auteur`, 
           `date`, 
           `imgAlt`
           FROM
            `article`
            WHERE
            `id`= :id
            
            ;"; /* on  recupere les donnée id competence intitulé resume dateStart et datefinish de tableau Mysql 'anonce'*/
$stmt = $pdo->prepare($edit);
  $stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
?>
<a href="show.php">retourner vers la page show</a>
<?php if (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
<form  action="doEdit.php" method="post">
    <input value="<?=$row["title"]?>" type="text" name="title" >
    <input type="text" value="<?=$row["image"]?>" name="image" >
    <SELECT name="categorie" size="1">
        <OPTION>journaliste
        <OPTION>annonceur
        <OPTION>partenaire
        <OPTION>lecteur
        <OPTION>office de tourisme
    </SELECT>
    <SELECT name="SousCategorie" size="1">
        <OPTION>bars
        <OPTION>restaurants
        <OPTION>hotels
    </SELECT>
    <input type="text" value="<?=$row["Lieux"]?>" name="Lieux" >
    <input type="text" value="<?=$row["description"]?>" name="description" >
    <input type="text" value="<?=$row["auteur"]?>" name="auteur" size="12" >
    <input type="text" value="<?=$row["date"]?>" name="date" size="12" >
    <input type="text" value="<?=$row["imgAlt"]?>" name="imgAlt" size="12" >
    <input  id="prodId" name="id" type="hidden" value="<?=$row["id"]?>">
    <input  value="submit"type="submit" name="submit"  class="envoie">
</form>
<?php endif;?>
</body>
</html>
