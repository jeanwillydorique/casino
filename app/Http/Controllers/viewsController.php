<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Connectors\Card as Card;

class viewsController extends Controller
{
    //
    public function pokerHome() {

        // deck draw 

        $card = new Card();
        $id = $card->getDeck(1);
        $data = $card->getCard($id->deck_id, 13);
        

        $potJ1 = 100;
        $potJ2 = 100;
        $potJ3 = 100;
        $playerpot = 100;


        return view('poker', [
            "potJ1" => $potJ1,
            "potJ2" => $potJ2,
            "potJ3" => $potJ3,
            "potJ4" => $playerpot,
            "deck" => $data

        ]);
    }


}
