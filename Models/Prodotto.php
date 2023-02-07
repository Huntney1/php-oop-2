<?php

class Prodotto {
    protected $immagine;
    protected $titolo;
    protected $prezzo;
    protected $iconaCategoria;

    public function __construct($immagine, $titolo, $prezzo, $iconaCategoria) {
        $this->immagine = $immagine;
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->iconaCategoria = $iconaCategoria;
    }

    public function getImmagine() {
        return $this->immagine;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function getIconaCategoria() {
        return $this->iconaCategoria;
    }
}

?>