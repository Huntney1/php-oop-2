<?php
//servono per mostrare gli errori
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */

include "Models/Prodotto.php";

?>

<?php

class Cibo extends Prodotto {
    protected $tipoProdotto = "Cibo";

    public function getTipoProdotto() {
        return $this->tipoProdotto;
    }
}

?>