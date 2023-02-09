
<?php

class Accessori extends Prodotto {
    public $materiale;
    public $dimensione; 

    public function __construct($titolo, $immagine, $iconaCategoria, $prezzo, $materiale, $dimensione)
    {
        parent::__construct($titolo, $immagine, $iconaCategoria, $prezzo);
    
        $this->materiale = $materiale;
        $this->dimensione = $dimensione;
    }

    public function getMateriale() {
        return $this->materiale;
    }

    public function getDimensione() {
        return $this->dimensione;
    }
}

?>

