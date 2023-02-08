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
}