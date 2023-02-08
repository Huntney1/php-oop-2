<?php

include "Models/Prodotto.php";

?>

<?php

class Cibo extends Prodotto {

    public $peso;
    public $ingredienti;

    public function __construct($titolo, $prezzo, $immagine, $iconaCategoria, $peso, $ingredienti,)
    {
        parent::__construct($titolo, $prezzo, $immagine, $iconaCategoria);

        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
    }


}

?>