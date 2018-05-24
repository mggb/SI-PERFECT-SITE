<?php
require_once 'admin/connection.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Document</title>
</head>
<body>
<?php
$total =" SELECT         
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
            ORDER BY
            `id`
            DESC 
            LIMIT
            6
            ;";
$stmt = $pdo->prepare($total);
$stmt->execute();
?>
<section class="Articles">
    <h1 class="Articles-header">Articles</h1>
    <div class="Articles-itemContainer">
        <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <a href="uneAnnéeDevoayege/article ?id=<?=$row["id"]?>"class="Articles-item">
            <img src="<?=substr($row["image"], (strlen($row["image"])-3)*-1)?>" alt="<?=$row["imgAlt"]?>" class="Articles-itemImg">
            <h2 class="Articles-itemTitle"><?=$row["title"]?></h2>
            <h3 class="Articles-itemCategory"><?=$row["categorie"]?></h3>
            <h3 class="Articles-itemSubCategory"><?=$row["SousCategorie"]?></h3>
            <h4 class="Articles-itemDate"><?=$row["date"]?></h4>
        </a>
        <?php endwhile;?>
    </div>
</section>
</body>
</html>
