<?php 

namespace App\Http\Connectors;

use App\Http\Connectors\Connector as Connector;


class Card extends Connector

{

    public function getDeck($decknumber)
    {
        return $this->tab("https://deckofcardsapi.com/api/deck/new/shuffle/?deck_count=$decknumber");
    }

    public function getCard($id, $number)
    {
        return $this->tab("https://deckofcardsapi.com/api/deck/$id/draw/?count=$number");
    }

    public function getDeckTest()
    {
        return $this->tab("https://deckofcardsapi.com/api/deck/new/shuffle/?deck_count=1");
    }

}
