<?php

//servono per mostrare gli errori
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */


include __DIR__. "/Models/Prodotto.php";
include __DIR__. "/Models/Cibo.php";
include __DIR__. "/Models/Cuccia.php";
include __DIR__. "/Models/Gioco.php"; 
include __DIR__. "/Models/Shop.php"; 

?>

<?

// Creo un'istanza della classe Shop e aggiungo alcuni prodotti.
$shop = new Shop();

/* Prodotti per Cani */
$cibo = new Cibo("Royal Canin Mini Adult", "43,99", "https://cdn.dogsitter.it/it/images/shop/rc-dog-mini-adult-big.jpg", "Cibo per Cani", "545g",["Prosciutto", "Riso"], "fa-solid fa-dog");
$cibo = new Cibo("Almo Nature Holistic Maintenance Mediuom Large Tonno e Riso", "44,99",  "https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/agnello/fresco/3/800/26699_pla_almo_nature_holistic_adult_lamm_reis_medium_741_12kg_dog_3.jpg", "Cibo per Cani", "600g", ["Manzo, Cereali"], "fa-solid fa-dog");
$gioco = new Gioco("Kong Classic", "13,49", "https://www.naturepetshop.it/wp-content/uploads/T1_1_1000x1000.jpg", "Gioco per Cani", "Galleggia e Rimbalza", "8,5 x 10cm", "Gomma", "fa-solid fa-dog");

/* Prodotti per Gatti */

$cibo = new Cibo("Almo Nature Cat Daily Lattina", "34,99",  "https://www.amoreanimaleshop.it/wp-content/uploads/2021/02/Almo-Nature-Cat-Daily-Coniglio-400.jpg", "Cibo per Gatti", "400g", ['Tonno', 'Pollo', 'Prosciutto'], )

$shop->addProdotto($cibo);
$shop->addProdotto($gioco);
$shop->addProdotto($accessori);

// Stampare le card dei prodotti.
$shop->stampaProdotti();


?>
