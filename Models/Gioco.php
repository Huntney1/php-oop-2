
<?php

class Gioco extends Prodotto {
    
    public $descrizione;
    public $dimensione;

    public function __construct($titolo, $immagine, $iconaCategoria, $prezzo, $descrizione, $dimensione)
    {
        parent::__construct($titolo, $immagine, $iconaCategoria, $prezzo);
        $this->descrizione = $descrizione;
        $this->dimensione = $dimensione;
    }


    public function getDescrizione() {
        return $this->descrizione;
    }

    public function getDimensione() {
        return $this->dimensione;
    }

}
?>