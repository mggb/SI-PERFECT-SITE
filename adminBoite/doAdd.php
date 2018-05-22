<?php
require_once 'connection.php';

if (!empty($_POST['submit'])) {
    $addform = "INSERT INTO `boiteimage` 
      ( 
      `imgAlt`, 
      `imgSrc`, 
      `description`) 
     VALUES 
      (
      :imgAlt, 
      :imgSrc, 
      :description);";

    $stmt = $pdo->prepare($addform);
    $stmt->bindValue(':imgAlt', $_POST['imgAlt']);
    $stmt->bindValue(':imgSrc', $_POST['imgSrc']);
    $stmt->bindValue(':description', $_POST['description']);
    $stmt->execute();
}
header('Location: show.php');