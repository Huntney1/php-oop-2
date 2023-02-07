<?php
include __DIR__. "/Prodotto.php";
include __DIR__. "/db.php";

class Shop
{
    protected $prodotti = [];

    public function addProdotto(Prodotto $prodotto)
    {
        $this->prodotti[] = $prodotto;
    }

    public function stampaProdotti()
    {
        foreach ($this->prodotti as $prodotto) {
            echo '<div class="card">';
            echo '<img src="' . $prodotto->getImmagine() . '" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $prodotto->getTitolo() . '</h5>';
            echo '<p class="card-text">Prezzo: ' . $prodotto->getPrezzo() . '</p>';
            echo '<p class="card-text">Tipo prodotto: ' . $prodotto->getTipoProdotto() . '</p>';
            echo '<p class="card-text">Icona categoria: ' . $prodotto->getIconaCategoria() . '</p>';
            echo '</div>';
            echo '</div>';
        }
    }
}

/* // Creare un'istanza della classe Shop e aggiungere alcuni prodotti.
$shop = new Shop();

$cibo = new Cibo("immagine-cibo.jpg", "Cibo per cani", 10, "fa-bone");
$gioco = new Gioco("immagine-gioco.jpg", "Gioco per cani", 20, "fa-paw");
$cuccia = new Cuccia("immagine-cuccia.jpg", "Cuccia per cani", 30, "fa-bed");

$shop->addProdotto($cibo);
$shop->addProdotto($gioco);
$shop->addProdotto($cuccia);

// Stampare le card dei prodotti.
$shop->stampaProdotti();
 */