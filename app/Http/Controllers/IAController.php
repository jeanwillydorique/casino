<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Connectors\Card as Card;

class IAController extends Controller
{
    //
    public function test(){

        $card = new Card();
        $id = $card->getDeck(1);
        $data = $card->getCard($id->deck_id, 1);
        return view('home',[
        // "data" => $response,
        "info"=> $response,
        "style"=> $style,
        ]);
    }


    public function pokerPlayStart(Request $request) {

        // draw 

        $card = new Card();
        $id = $card->getDeck(1);
        $data = $card->getCard($id->deck_id, 13);

        // player pseudo 

        $pseudo = $request->playername;

        // Pot
        
        $potJ1 = 100;
        $potJ2 = 100;
        $potJ3 = 100;
        $playerpot = 100;

        // tour 1
        $timeJ1 = rand(1,30);
        $decisionJ1 = rand(1,2);

        //sleep($timeJ1);

        if ($decisionJ1 === 1) {
            $actionJ1 = "Miser";
            $miseJ1 = rand(1, $potJ1);
                if ( $miseJ1 == $potJ1 ) {
                    $actionJ1 = "Tapis";
                };
            $potJ1 = $potJ1 - $miseJ1;
        } else {
            $actionJ1 = "Jeter";
            $miseJ1 = 0;
            $potJ1 = $potJ1;
        }

        $timeJ2 = rand(1,30);
        $decisionJ2 = rand(1,2);

        //sleep($timeJ2);

        if ($decisionJ2 === 1) {
            $actionJ2 = "Miser";
            $miseJ2 = rand(1, $potJ2);

                if ( $miseJ2 == $potJ2 ) {
                    $actionJ2 = "Tapis";
                };
            $potJ2 = $potJ2 - $miseJ2;
        } else {
            $actionJ2 = "Jeter";
            $miseJ2 = 0;
            $potJ2 = $potJ2;
        }

        $timeJ3 = rand(1,30);
        $decisionJ3 = rand(1,2);

        //sleep($timeJ3);

        if ($decisionJ3 === 1) {
            $actionJ3 = "Miser";
            $miseJ3 = rand(1, $potJ3);

                if ( $miseJ3 == $potJ3 ) {
                    $actionJ3 = "Tapis";
                };
            $potJ3 = $potJ3 - $miseJ3;
        } else {
            $actionJ3 = "Jeter";
            $miseJ3 = 0;
            $potJ3 = $potJ3;
        }


        return view('pokerplay', [
            "actionJ1" => $actionJ1,
            "actionJ2" => $actionJ2,
            "actionJ3" => $actionJ3,
            "miseJ1" => $miseJ1,
            "miseJ2" => $miseJ2,
            "miseJ3" => $miseJ3,
            "potJ1" => $potJ1,
            "potJ2" => $potJ2,
            "potJ3" => $potJ3,
            "playerpot" => $playerpot,
            "pseudo" => $pseudo,
            "deck" => $data
        ]);


    }

    public function pokerAction(Request $request) {

        // verification si les jouer sont présent 
        if ($request->actionJ1 === "Jeter") {
            $presentJ1 = "non"; 
            $actionJ1 = $request->actionJ1;
            $miseJ1 = " ";
            $potJ1 = $request->potJ1;
        } 
        else {
            // Verification du pot
            $presentJ1 = "oui"; 
            $potJ1 = $request->potJ1;

            // tour 1
            $timeJ1 = rand(1,30);
            $decisionJ1 = rand(1,2);

            //sleep($timeJ1);

            if ($decisionJ1 === 1) {
                $actionJ1 = "Miser";
                $miseJ1 = rand(1, $potJ1);
                    if ( $miseJ1 == $potJ1 ) {
                        $actionJ1 = "Tapis";
                    };
                $potJ1 = $potJ1 - $miseJ1;
            } else {
                $actionJ1 = "Jeter";
                $miseJ1 = 0;
                $potJ1 = $potJ1;
            }
        }

        if ($request->actionJ2 === "Jeter") {
            $presentJ2 = "non"; 
            $actionJ2 = $request->actionJ2;
            $miseJ2 = " ";
            $potJ2 = $request->potJ2;
        } 
        else {
            // Verification du pot
            $presentJ2 = "oui"; 
            $potJ2 = $request->potJ2;

            // tour 1
            $timeJ2 = rand(1,30);
            $decisionJ2 = rand(1,2);

            //sleep($timeJ1);

            if ($decisionJ2 === 1) {
                $actionJ2 = "Miser";
                $miseJ2 = rand(1, $potJ2);
                    if ( $miseJ2 == $potJ2 ) {
                        $actionJ2 = "Tapis";
                    };
                $potJ2 = $potJ2 - $miseJ2;
            } else {
                $actionJ2 = "Jeter";
                $miseJ2 = 0;
                $potJ2 = $potJ2;
            }
        }

        if ($request->actionJ3 === "Jeter") {
            $presentJ3 = "non"; 
            $actionJ3 = $request->actionJ3;
            $miseJ3 = " ";
            $potJ3 = $request->potJ3; 
        } 
        else {
            // Verification du pot
            $presentJ3 = "oui"; 
            $potJ3 = $request->potJ3;

            // tour 1
            $timeJ3 = rand(1,30);
            $decisionJ3 = rand(1,2);

            //sleep($timeJ1);

            if ($decisionJ3 === 1) {
                $actionJ3 = "Miser";
                $miseJ3 = rand(1, $potJ3);
                    if ( $miseJ3 == $potJ3 ) {
                        $actionJ3 = "Tapis";
                    };
                $potJ3 = $potJ3 - $miseJ3;
            } else {
                $actionJ3 = "Jeter";
                $miseJ3 = 0;
                $potJ3 = $potJ3;
            }
        }

        if ($request->playeraction[0] === "Jeter") {
            $presentplayer = "non"; 
            $playerpot = $request->playerpot;
            $miseJ1 = " ";
            $playeraction = $request->playeraction[0];
        } 
        else {
            
            $presentplayer = "oui"; 
            $playermise = $request->mise;
            $playerpot = $request->playerpot;
            if ( $playermise == $playerpot ) {
                $playeraction = "Tapis";
            } else {
            $playeraction = $request->playeraction[0];
            $playerpot = $playerpot - $playermise;
            }

        }

        return view('pokerplay', [
                "actionJ1" => $actionJ1,
                "actionJ2" => $actionJ2,
                "actionJ3" => $actionJ3,
                "presentJ1" => $presentJ1,
                "presentJ2" => $presentJ2,
                "presentJ3" => $presentJ3,
                "presentplayer" => $presentplayer,
                "miseJ1" => $miseJ1,
                "miseJ2" => $miseJ2,
                "miseJ3" => $miseJ3,
                "potJ1" => $potJ1,
                "potJ2" => $potJ2,
                "potJ3" => $potJ3,
                "playerpot" => $playerpot,
                "playeraction" => $playeraction,
                "playermise" => $playermise,
                "pseudo" => $request->pseudo
            ]);
        
    }


    }
