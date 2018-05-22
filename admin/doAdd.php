<?php
require_once 'connection.php';

if (!empty($_POST['submit'])) {
    $addform = "INSERT INTO `article` 
      ( 
      `title`, 
      `categorie`, 
      `SousCategorie`,
      `Lieux`, 
      `description`, 
      `date`, 
      `imgAlt`, 
      `image`, 
      `auteur`) 
     VALUES 
      (
      :title, 
      :categorie, 
      :SousCategorie,
      :Lieux, 
      :description,
      :date, 
      :imgAlt, 
      :image, 
      :auteur);";

    $stmt = $pdo->prepare($addform);
    $stmt->bindValue(':title', $_POST['title']);
    $stmt->bindValue(':categorie', $_POST['categorie']);
    $stmt->bindValue(':SousCategorie', $_POST['SousCategorie']);
    $stmt->bindValue(':description', $_POST['description']);
    $stmt->bindValue(':date', $_POST['date']);
    $stmt->bindValue(':Lieux', $_POST['Lieux']);
    $stmt->bindValue(':imgAlt', $_POST['imgAlt']);
    $stmt->bindValue(':image', $_POST['image']);
    $stmt->bindValue(':auteur', $_POST['auteur']);
    $stmt->execute();
}
var_dump($_POST);