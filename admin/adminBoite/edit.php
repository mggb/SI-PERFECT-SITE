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
           `imgAlt`,  
           `imgSrc`,
           `description`
           FROM
            `boiteimage`
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
    <input value="<?=$row["imgAlt"]?>" type="text" name="imgAlt" >
    <input type="text" value="<?=$row["imgSrc"]?>" name="imgSrc" >
    <input type="text" value="<?=$row["description"]?>" name="description" >
    <input  id="prodId" name="id" type="hidden" value="<?=$row["id"]?>">
    <input  value="submit"type="submit" name="submit"  class="envoie">
</form>
<?php endif;?>
</body>
</html>
