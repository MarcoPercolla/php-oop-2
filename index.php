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
                <p><?= (isset($UtenteCorrente->sconto)) ? getsconto($prodotto->price,$UtenteCorrente->sconto)."$"   : $prodotto->price."$"  ?></p>
                
                <h6><?=get_class($prodotto)?></h6>
                <h3>categoria </h3>
                <p>razza consigliata:<?= $prodotto->categoria->razza?></p>
                <p><?= (isset($prodotto->materiale)) ? "materiale:" . $prodotto->materiale  : "" ?></p>
                <p><?= (isset($prodotto->tipologia)) ? "tipo di gioco:" . $prodotto->tipologia  : "" ?></p>
                <p><?= (isset($prodotto->ingredienti)) ? "ingredienti:" . implode(",",$prodotto->ingredienti)  : "" ?></p>
                <p><?= (isset($prodotto->scadenza)) ? "scadenza:" . $prodotto->scadenza  : "" ?></p>
                <p><?= (isset($prodotto->dimensione)) ? "dimensioni:" . $prodotto->dimensione  : "" ?></p>
                

            </div>
            
         <?php }; ?>


    </div>
    
</body>
</html>
