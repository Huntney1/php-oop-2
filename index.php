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

<body>
    <div class="container">
        <div class="row">
            <?php foreach($shop as $prodotto) {?>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="<?php echo $prodotto->$immagine;?>" class="img-fluid"/>
                        <h4><?php echo $prodotto->$titolo; ?></h4>
                        <p>
                            Prezzo €:<?php echo $prodotto->$prezzo; ?>
                        </p>
                        <p>
                            <!-- controlli -->
                            <?php 
                            if(isset($prodotto->$ingredienti)){
                                echo implode(',', $prodotto->$ingredienti);
                            } 

                            if(isset($prodotto->$peso)){
                                echo $prodotto->$peso;
                            } 


                            if(isset($prodotto->$materiale)){
                                echo $prodotto->$materiale;
                            } 
                            
                            if(isset($prodotto->$dimensione)){
                                echo $prodotto->$dimensione;
                            }

                            if(isset($prodotto->$descrizione)){
                                echo $prodotto->$descrizione;
                            } 

                            ?>
                        </p>
                    </div>
                </div>
           <?php } ?>
        </div>
    </div>

  
</body>

</html>