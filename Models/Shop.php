<?php

class Shop
{
    protected $prodotti = [];

    public function addProdotto(Prodotto $prodotto)
    {
        $this->prodotti[] = $prodotto;
    }
}

?>