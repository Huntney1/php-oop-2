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

    
    public function getTitolo(){
        return $this->titolo;
    }
    
    public function getPrezzo() {
        return $this->prezzo;
    }
    
    public function getImmagine() {
        return $this->immagine;
    }
    
    public function getIconaCategoria() {
        return $this->iconaCategoria;
    }
}

?>