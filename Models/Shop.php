<?php

class Shop
{
    public $prodotti = [];

    public function addProdotto(Prodotto $prodotto)
    {
        $this->prodotti[] = $prodotto;
    }

    /* public function stampaCards()
    {
        foreach ($this->prodotti as $prodotto) {
            echo "<div class='card'>";
            echo "<div class='card-header'>";
            echo "<h5 class='card-title'>" . $prodotto->titolo . "</h5>";
            echo "</div>";
            echo "<div class='card-body'>";
            echo "<img class='card-img' src=". $prodotto->immagine ." >";
            echo "<p class='card-text'>Icone categoria: " . $prodotto->iconaCategoria . "</p>";
            echo "<p class='card-text'>Prezzo: " . $prodotto->prezzo . "</p>";
            echo "</div>";
            echo "</div>";
        }
    } */

} 

?>