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
    <form  action="doAdd.php" method="post">
        <input type="text" name="title" placeholder="title">
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
        <textarea name="description" placeholder="Description" rows="8" cols="60" ></textarea>
        <input type="date" name="date" size="12" placeholder="date">
        <input type="text" name="imgAlt" size="12" placeholder="img-alt">
        <input type="text" name="Lieux" size="12" placeholder="Lieux">
        <input type="text" name="image" size="12" placeholder="img-src">
        <input type="text" name="auteur" size="12" placeholder="img-alt">
        <input type="submit" name="submit" value="Envoyer" class="envoie">
    </form>
</div>

