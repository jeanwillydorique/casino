<?php 

namespace App\Http\Connectors;

use App\Http\Connectors\Connector as Connector;


class Got extends Connector
{
    public function getCharacter()
    {
        return $this->get("https://anapioficeandfire.com/api/characters/27");

    }
}

