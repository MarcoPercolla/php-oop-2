<?php
require_once __DIR__ . '/Models/Gioco.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Cuccia.php';

$cane = new Categoria("Cane");
$gatto = new Categoria("Gatto");

$prodotti = [
    new Gioco(
        "Palla rossa",
        "4$", 
        "https://labottegadelpet.it/wp-content/uploads/2020/11/83489.jpg",
        $gatto,
        "silicone",
        "masticazione",
        
        
    ),
    new cibo(
        "Crocchette di pesce",
        "14$", 
        "https://www.mangus.it/wp-content/uploads/2021/06/SFC-Mangus-SF-templ-12kg.jpg",
        $cane,
        ["pesce","proteine","verdure"],
        "12 Dec"
    ),
    new Cuccia(
        "Cuccia ",
        "6$", 
        "https://www.aquazoomaniashop.it/34082-large_default/dog-line-cuccia-svalbard-waterproof-per-cane.jpg",
        $cane,
        "lana",
        "xl",
    ),
    new Prodotto(
        "Osso",
        "6$", 
        "https://www.fordogtrainers.it/images/osso-per-cane-nuovo-giocattolo-TT105-big.jpg",
        $cane,
    ),
];

