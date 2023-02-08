<?php

class Prodotto {
    public $titolo;
    public $prezzo;
    public $immagine;
    public $iconaCategoria;

    public function __construct($titolo, $prezzo, $immagine, $iconaCategoria) {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->iconaCategoria = $iconaCategoria;
    }


}

?>