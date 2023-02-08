<?php

include "Models/Prodotto.php";

?>

<?php

class Accessori extends Prodotto {
    public $materiale;
    public $dimensione; 

    public function __construct($titolo, $prezzo, $immagine, $iconaCategoria, $materiale, $dimensione,)
    {
        parent::__construct($titolo, $prezzo, $immagine, $iconaCategoria);
    
        $this->materiale = $materiale;
        $this->dimensione = $dimensione;
    }
}

?>

