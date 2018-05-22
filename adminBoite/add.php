<?php
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
<a href="index.php">retourner vers la page a</a>
    <h2 class="title">ajouter un article :</h2>
    <form  action="doAdd.php" method="post">
        <input type="text" name="imgAlt" placeholder="imgAlt">
        <input type="text" name="imgSrc" placeholder="imgSrc">
        <textarea name="description" placeholder="Description" rows="8" cols="60" ></textarea>
        <input type="submit" name="submit" value="Envoyer" class="envoie">
    </form>
</div>

