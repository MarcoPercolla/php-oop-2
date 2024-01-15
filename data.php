<?php
require_once __DIR__ . '/Models/Gioco.php';
require_once __DIR__ . '/Models/Cibo.php';

$prodotti = [
    new Gioco(
        "palla",
        "4$", 
        "https://labottegadelpet.it/wp-content/uploads/2020/11/83489.jpg",
        new Categoria("cane","tutte","tutte"),
        "silicone",
        "masticazione"
    ),
    new Prodotto(
        "osso",
        "6$", 
        "https://labottegadelpet.it/wp-content/uploads/2020/11/83489.jpg",
        new Categoria("cane","m","adulto"),
    ),
];