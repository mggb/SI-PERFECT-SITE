<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
</head>
<body>
<?php
$total =" SELECT         
           `id`,
            `imgSrc`, 
            `imgAlt`, 
            `description`
           FROM
            `boiteimage`
            
            ;"; /* on  recupere les donnée id competence intitulé resume dateStart et datefinish de tableau Mysql 'anonce'*/
$stmt = $pdo->prepare($total);
$stmt->execute();
?>
<h1 class="annonce-titre">Tout les post</h1>
<a href="index.php">retourner vers la page admin</a>
<section class="container-annonce">
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <div>
            <p><?=$row["imgAlt"]?></p>
            <p><?=$row["imgSrc"]?></p>
            <p><?=$row["description"]?></p>
        </div>
        <a href="edit.php?id=<?=$row["id"]?>">modifié</a>
        <a href="delete.php?id=<?=$row["id"]?>">suprimé</a>
    <?php endwhile;?> <!- on ferme la balise php et on fini la condition tant que ->
</section>
</body>
