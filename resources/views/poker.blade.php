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

        <div class="table">
            <form class="pokerform" action="/pokerplay" method="post">
            @csrf
            <div class="hautdetable">
                <div class="player1">
                    <p>Player 1</p>
                    <p>Pot {{$potJ1}}</p>
                    <input type="hidden" value="{{$potJ1}}" name="potJ1">
                </div>
                <div class="player2">
                    <p>Player 2</p>
                    <p>Pot : {{$potJ2}}</p>
                    <input type="hidden" value="{{$potJ2}}" name="potJ2">
                </div>
            </div>
            <div class="basdetable">
                <div class="player3">
                    <p>Player 3</p>
                    <p>Pot : {{$potJ3}}</p>
                    <input type="hidden" value="{{$potJ3}}" name="potJ3">
                </div>
                <div class="player4">
                    <label> Votre Pseudo</label>
                    <input type="text" name="playername">
                    <p>Pot : {{$potJ4}}</p>
                    <input type="hidden" value="{{$potJ4}}" name="potJ4">
                </div>
            </div>


            <input type="submit" value="Jouez">
            </form>
        </div>
        
@endsection

