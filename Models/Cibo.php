
<?php

class Cibo extends Prodotto {

    public $peso;
    public $ingredienti;

    public function __construct($titolo, $immagine, $iconaCategoria, $prezzo, $peso, $ingredienti)
    {
        parent::__construct($titolo, $immagine, $iconaCategoria, $prezzo  );

        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
    }

}

?>