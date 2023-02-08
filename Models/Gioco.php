
<?php

class Gioco extends Prodotto {
    
    public $descrizione;
    public $dimensione;

    public function __construct($titolo, $prezzo, $immagine, $iconaCategoria, $descrizione, $dimensione)
    {
        parent::__construct($titolo, $prezzo, $immagine, $iconaCategoria);
        $this->descrizione = $descrizione;
        $this->dimensione = $dimensione;
    }

}
?>