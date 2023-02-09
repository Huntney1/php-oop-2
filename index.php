<?php
//servono per mostrare gli errori
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<?php
include __DIR__ . "/Models/Shop.php";
include __DIR__ . "/Models/Prodotto.php";
include __DIR__ . "/Models/Gioco.php";
include __DIR__ . "/Models/Cibo.php";
include __DIR__ . "/Models/Accessori.php";
include __DIR__ . "/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP2</title>

    <!-- Autore -->
    <meta name="author" content="Simone Fera">
    <!-- Descrizione del sito -->
    <meta name="description" content="programmazione PHP OOP">

    <!-- Refresh permette il client-pull (refrescia la pagina in automatico) -->
    <!--  <meta http-equiv="refresh" content="40"> -->

    <!-- Persona CSS -->
    <link rel="stylesheet" href="./CSS/style.css">

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CDN Font-Awesome (Icons)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body >
    <div class="container col-12 mt-2" style="background-color: #13005A;">
        <div class="row d-flex flex-wrap justify-content-around">
            <?php foreach($shop->prodotti as $prodotto) { ?>
                <div class="col-md-5 mt-2">
                    <div class="card col-7">
                        <img src="<?php echo $prodotto->immagine;?>" class="img-fluid"/>
                        <h4><?php echo $prodotto->titolo; ?></h4>
                        <p>
                            Prezzo €:<?php echo $prodotto->prezzo; ?>
                        </p>
                        <p>
                                <!-- Cibo -->
                            <?php if(get_class($shop) == 'Cibo') { ?>
                                <p class="p-1">
                                   Peso netto:<?php echo $prodotto->Peso ; ?>  
                                </p>

                                <p class="p-2">
                                   Ingredienti:<?php echo implode(', ', $Prodotto->ingredienti); ?>  
                                </p>  
                            <?php } ?>

                                <!-- Gioco -->
                            <?php if(get_class($shop) == 'Gioco') { ?>
                                <p class="p-1">
                                   Descrizione del Prodotto:<?php echo $prodotto->descrizione; ?>  
                                </p>

                                <p class="p-2">
                                   Dimensioni:<?php echo $shop->$prodotto; ?>  
                                </p>  
                            <?php } ?>

                                <!-- Accessori -->
                            <?php if(get_class($shop) == 'Accessori') { ?>
                                <p class="p-1">
                                   Materiale:<?php echo $Prodotto->materiale; ?>  
                                </p>

                                <p class="p-2">
                                   Dimensioni:<?php echo $Prodotto->dimensione; ?>  
                                </p>  
                            <?php } ?>

                       

                        </p>
                    </div>
                </div>
           <?php } ?>
        </div>
    </div>

  
</body>

</html>