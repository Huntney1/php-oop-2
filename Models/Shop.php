
<?php

class Shop
{
    public $prodotti = [];

    public function addProdotto(Prodotto $prodotto)
    {
        $this->prodotti[] = $prodotto;
    }

    public function stampaCards()
    {

        echo '<div class="container-title">';
        echo    '<h1 class="boolshop-title">BOOLShop</h1>';
        echo '</div>';
        echo "<div class='container mt-5'>";
        echo    "<div class='row row-cols-1 row-cols-md-3 g-4'>";
        foreach ($this->prodotti as $prodotto) {

            echo        "<div class='col'>";
            echo            "<div class='card h-100'>";
            echo                "<img class='card-img-top img-fluid'  src=" . $prodotto->getImmagine() . " alt='Card image cap' >";
            echo                   "<div class='card-body'>";
            echo                    "<h5 class='card-title'>" . $prodotto->getTitolo() . "</h5>";
            echo                    "<p class='card-text'>" .  $prodotto->getIconaCategoria() . "</p>";
            echo                    "<p class='card-text'>Prezzo: " . $prodotto->getPrezzo() .  "€</p>";

            #Cibo 
            if (get_class($prodotto) == 'Cibo') {
                echo "<p class='card-text'> Peso netto: " . $prodotto->getPeso() . "</p>";
                echo "<p class='card-text'>Ingredienti: " . implode(', ', $prodotto->getIngredienti()) .  "</p>";
            }

            #Gioco
            if (get_class($prodotto) == 'Gioco') {
                echo "<p class='card-text'> Descrizione: " . $prodotto->getDescrizione() . "</p>";
                echo "<p class='card-text'>Dimensioni: " .  $prodotto->getDimensione() .  "</p>";
            }

            #Accessori
            if (get_class($prodotto) == 'Accessori') {
                echo "<p class='card-text'> Materiale: " . $prodotto->getMateriale() . "</p>";
                echo "<p class='card-text'>Dimensioni: " .  $prodotto->getDimensione() .  "</p>";
            }

            echo                "</div>";
            echo            "</div>";
            echo        "</div>";
        }
        echo    "</div>";
        echo "</div>";
    }
}

?>