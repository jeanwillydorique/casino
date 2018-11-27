<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class drawcontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        return view('welcome', [
        ]) ;
    }


    public function draw(Request $request)
    {   
        // nombre aléatoire 
        $n = 5;  
        $numbers = range(1, 49);
        $rands = array();
        for ($i=0; $i < $n; $i++) {
        $ok = false;
        while (!$ok) {
            $x = array_rand($numbers);
            $ok = !in_array($numbers[$x], $rands) && $numbers[$x] != $i;
        }
        $rands[$i] = $numbers[$x];
        //unset($numbers[$x]);
        }

        // nombre aléatoire 
        $e = 2;  
        $stars = range(1, 7);
        $starrand = array();
        for ($j=0; $j < $e; $j++) {
        $oki = false;
        while (!$oki) {
            $y = array_rand($stars);
            $oki = !in_array($stars[$y], $starrand) && $stars[$y] != $j;
        }
        $starrand[$j] = $stars[$y];
        //unset($numbers[$x]);
        }
        

        // comparaison et recup
        
        $numbers = $request->number;
        $stars = $request->star;

        $resultfalse = array_diff($rands, $numbers);
        $resultgood = array_intersect($rands, $numbers);
        $falsenumbers = count($resultfalse);
        $goodnumbers = count($resultgood);

        $starfalse = array_diff($starrand, $stars);
        $startgood = array_intersect($starrand, $stars);
        $falsestars = count($starfalse);
        $goodstars = count($startgood);

        return view('draw', [
            "rands" => $rands,
            "resultsfalse" => $resultfalse,
            "resultsgood" => $resultgood,
            "numbers" => $numbers,
            "goodnumbers" => $goodnumbers,
            "falsenumbers" => $falsenumbers,
            "starrands" => $starrand,
            "starfalse" => $starfalse,
            "startgood" => $startgood,
            "stars" => $stars,
            "falsestar" => $falsestars,
            "goodstar" => $goodstars,
        ]) ;
    }


}
