@extends('layouts.app')


@section('title', 'WiLLoto')


@section('content')

        {{-- <table style="width:100%">
                    <tr>
                        <th>Player</th>
                            <th>Action</th> 
                            <th>Mise</th>
                            <th>Pot</th>
                    </tr>
                    <tr>
                        <td>J1</td>
                            <td>{{$actionJ1}}</td> 
                            <td>{{$miseJ1}}</td>
                            <td>{{$potJ1}}</td>
                    </tr>
                    <tr>
                        <td>J2</td>
                            <td>{{$actionJ2}}</td> 
                            <td>{{$miseJ2}}</td>
                            <td>{{$potJ2}}</td>
                    </tr>
                    <tr>
                        <td>J3</td>
                            <td>{{$actionJ3}}</td> 
                            <td>{{$miseJ3}}</td>
                            <td>{{$potJ3}}</td>
                    </tr>
                    <tr>
                        <td>J4</td>
                            <td>{{$actionJ4}}</td> 
                            <td>{{$miseJ4}}</td>
                            <td>{{$potJ4}}</td>
                    </tr>
        </table> --}}

        {{-- @php dd($deck->cards) @endphp --}}
        <div class="table">
            <form class="pokerform" action="/turn" method="post">
            @csrf
            <div class="hautdetable">
                <div class="player1">
                    <p>Player 1</p>
                    <p>Action : {{$actionJ1}}</p> 
                    <input type="hidden" value="{{$actionJ1}}" name="actionJ1">
                    @if ( $miseJ1 > 0 )
                        <p>Mise : {{$miseJ1}}</p>
                    @endif
                    <p>Pot {{$potJ1}}</p>
                    <input type="hidden" value="{{$potJ1}}" name="potJ1">
                    <div class="main">
                        <img src="{{$deck->cards[0]->image}}">
                        <img src="{{$deck->cards[1]->image}}">
                    </div>
                </div>
                <div class="player2">
                    <p>Player 2</p>
                    <p>Action : {{$actionJ2}}</p> 
                    <input type="hidden" value="{{$actionJ2}}" name="actionJ2">
                    @if ( $miseJ2 > 0 )
                        <p>Mise : {{$miseJ2}}</p>
                    @endif
                    <p>Pot : {{$potJ2}}</p>
                    <input type="hidden" value="{{$potJ2}}" name="potJ2">
                    <div class="main">
                            <img src="{{$deck->cards[2]->image}}">
                            <img src="{{$deck->cards[3]->image}}">
                    </div>
                </div>
            </div>
            <div class="basdetable">
                <div class="player3">
                    <p>Player 3</p>
                    <p>Action : {{$actionJ3}}</p> 
                    <input type="hidden" value="{{$actionJ3}}" name="actionJ3">
                    @if ( $miseJ3 > 0 )
                        <p>Mise : {{$miseJ3}}</p>
                    @endif
                    <p>Pot : {{$potJ3}}</p>
                    <input type="hidden" value="{{$potJ3}}" name="potJ3">
                    <div class="main">
                            <img src="{{$deck->cards[4]->image}}">
                            <img src="{{$deck->cards[5]->image}}">
                    </div>
                </div>
                <div class="player4">
                    <p>{{$pseudo}}</p>
                    <input type="hidden" value="{{$pseudo}}" name="pseudo">
                        <label for="Action"> Que Voulez Vous Faire</label>
                                <input type="checkbox" name="playeraction[]" value="Miser">Miser<br>
                                <input type="checkbox" name="playeraction[]" value="Jeter">Jeter<br>
                                <input type="number" name="mise" value="mise">
                        <p>Pot : {{$playerpot}}</p>
                        <input type="hidden" value="{{$playerpot}}" name="playerpot">
                        <div class="main">
                                <img src="{{$deck->cards[6]->image}}">
                                <img src="{{$deck->cards[7]->image}}">
                        </div>
                </div>
            </div>


            <input type="submit" value="Jouez">
            </form>
        </div>

        <div class="flop">
                <img src="{{$deck->cards[8]->image}}">
                <img src="{{$deck->cards[9]->image}}">
                <img src="{{$deck->cards[10]->image}}">
                <img src="{{$deck->cards[11]->image}}">
                <img src="{{$deck->cards[12]->image}}">
        </div>
        
@endsection

