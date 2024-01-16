<?php
require_once __DIR__ . '/Models/Gioco.php';
require_once __DIR__ . '/Models/Cibo.php';

$cane = new Categoria("Cane");
$gatto = new Categoria("Gatto");

$prodotti = [
    new Gioco(
        "palla",
        "4$", 
        "https://labottegadelpet.it/wp-content/uploads/2020/11/83489.jpg",
        $gatto,
        "silicone",
        "masticazione",
        
        
    ),
    new Prodotto(
        "osso",
        "6$", 
        "https://www.fordogtrainers.it/images/osso-per-cane-nuovo-giocattolo-TT105-big.jpg",
        $cane,
    ),
];

