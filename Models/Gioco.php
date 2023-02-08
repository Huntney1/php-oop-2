<?php
//servono per mostrare gli errori
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */

include "Models/Prodotto.php";

?>

<?php

class Gioco extends Prodotto {
    
    public $descrizione;
    public $dimensione;

    public function __construct($titolo, $prezzo, $immagine, $iconaCategoria, $descrizione, $dimensione, )
    {
        parent::__construct($titolo, $prezzo, $immagine, $iconaCategoria);
        $this->descrizione = $descrizione;
        $this->dimensione = $dimensione;
    }

}
?>