
<?php

// include __DIR__ . "/Models/Shop.php"; 
// include __DIR__ . "/Models/Prodotto.php"; 
// include __DIR__ . "/Models/Gioco.php";
// include __DIR__ . "/Models/Cibo.php";
// include __DIR__ . "/Models/Accessori.php"; 

// Creo un'istanza della classe Shop e aggiungo alcuni prodotti.
$shop = new Shop();

/* Prodotti per Cani */
$cibo = new Cibo("Royal Canin Mini Adult", "https://cdn.dogsitter.it/it/images/shop/rc-dog-mini-adult-big.jpg",  "Cibo per Cani","43,99", "545g",["Prosciutto", "Riso"]);
$cibo = new Cibo("Almo Nature Holistic Maintenance Mediuom Large Tonno e Riso", "https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/agnello/fresco/3/800/26699_pla_almo_nature_holistic_adult_lamm_reis_medium_741_12kg_dog_3.jpg", "Cibo per Cani", "44,99", "600g", ["Manzo, Cereali"]);
$gioco = new Gioco("Kong Classic", "https://www.naturepetshop.it/wp-content/uploads/T1_1_1000x1000.jpg", "Gioco per Cani", "13,49", "Galleggia e Rimbalza", "8,5 x 10cm", "Gomma");

/* Prodotti per Gatti */
$cibo = new Cibo("Almo Nature Cat Daily Lattina", "https://www.amoreanimaleshop.it/wp-content/uploads/2021/02/Almo-Nature-Cat-Daily-Coniglio-400.jpg", "34,99","Cibo per Gatti",  "400g", ['Tonno', 'Pollo', 'Prosciutto']);
$gioco = new Gioco("Topini di peluche Trixie", "https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/8/800/42535_trixie_plueschmaus_weiss_hs_02_8.jpg", "Gioco per Gatti",  "4,99", "Morbido con codina in corda", "8,5 cm x 10cm");

/* Prodotti per Pesci */
$cibo = new Cibo("Mangime Per Pesci Guppy in Fiocchi",  "https://www.pets-house.it/6903-large_default/tetra-guppy-fiocchi-100-ml.jpg", "Cibo per Pesci", "2,95", "30g", ["Pesci e sottoprodotti dei pesci", "Cereali", "Lieviti", "Alghe"]);
$accessori = new Accessori("Cartucce Filtranti per Filtro EasyCrystal", "2,29", "https://www.koi-franciacorta.it/pimages/TETRA-EASYCRYSTAL-FILTERPACK-CON-CARBONE-CONFEZIONE-DA-3-PEZZI-E-extra-big-5544-824.jpg", "Filtro Pulizia Pesci",  "Materiale Espanso", "ND");

/* Prodotti per Volatili */
$accessori = new Accessori("Voliera Wilma in Legno",  "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1760290610", "volatili", "184,99", "Legno", "M: L 83 x P 67 x H 153 cm");

$shop->addProdotto($cibo);
$shop->addProdotto($gioco);
$shop->addProdotto($accessori);
$shop->stampaCards(); 
?>