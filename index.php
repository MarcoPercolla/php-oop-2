<?php
require_once __DIR__ . '/Data.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop2 Shop</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <?php foreach ($prodotti as $prodotto) { ?>
            
            <div class="card">
                
                <img class="productImage" src="<?= $prodotto->src?>" alt="">
                <h2><?= $prodotto->name?></h2>
                <p><?= $prodotto->price?></p>
                <h6><?=get_class($prodotto)?></h6>
                <h3>categoria </h3>
                <p>razza consigliata:<?= $prodotto->categoria->razza?></p>
                <p><?= (isset($prodotto->materiale)) ? "(" . $prodotto->materiale . ")" : "" ?></p>
                <p><?= (isset($prodotto->tipologia)) ? "(" . $prodotto->tipologia . ")" : "" ?></p>

            </div>
            
         <?php }; ?>


    </div>
    
</body>
</html>
