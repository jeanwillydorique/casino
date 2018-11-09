<?php 

namespace App\Http\Connectors;

use App\Http\Connectors\Connector as Connector;


class Card extends Connector

{

    public function getDeck($decknumber)
    {
        $this->tab("https://deckofcardsapi.com/api/deck/new/shuffle/?deck_count=$decknumber");
    }

    public function getCard($id, $number)
    {
        $this->tab("https://deckofcardsapi.com/api/deck/$id/draw/?count=$number");
    }

}
