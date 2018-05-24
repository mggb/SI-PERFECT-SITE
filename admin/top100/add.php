<?php
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
<a href="index.php">retourner vers la page a</a>
    <h2 class="title">ajouter un article :</h2>
    <form  action="doAdd.php" method="post" enctype="multipart/form-data">
        <SELECT name="categorie" size="1">
            <OPTION>bar
            <OPTION>hotel
            <OPTION>restaurants
        </SELECT>
        <input type="text" name="nom" size="12" placeholder="nom">
        <input type="text" name="description" size="12" placeholder="description">
        <input type="text" name="lien" size="12" placeholder="Lieux">
        <input type="text" name="note" size="12" placeholder="note">
        <input type="file" name="image" size="12" placeholder="img-src">
        <input type="submit" name="submit" value="Envoyer" class="envoie">
    </form>
</div>

