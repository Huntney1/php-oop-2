<?php

class Prodotto {
    public $titolo;
    public $immagine;
    public $iconaCategoria;
    public $prezzo;

    public function __construct($titolo, $immagine, $iconaCategoria, $prezzo) {
        $this->titolo = $titolo;
        $this->immagine = $immagine;
        $this->iconaCategoria = $iconaCategoria;
        $this->prezzo = $prezzo;
    }

    
    public function getTitolo(){
        return $this->titolo;
    }
    
    public function getImmagine() {
        return $this->immagine;
    }

    public function getIconaCategoria() {
        return $this->iconaCategoria;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }
    
}

?>