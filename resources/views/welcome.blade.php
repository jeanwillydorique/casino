@extends('layouts.app')


@section('title', 'WiLLoto')


@section('content')

    <div class="game">

        <form method="post" action="/draw">
            @csrf

            <div class="numberticket">
                @for ($i = 1; $i < 50; $i++)
                <div class="button">
                    <div class="btn btn-default btn-circle" >{{ $i }}
                        <input type="checkbox" class="hidden" name="number[]" value="{{ $i }}">
                    </div>
                </div>
                @endfor
            </div>


            <div class="starsticket">
                @for ($j = 1; $j < 8; $j++)
                <div class="button">
                    <div class="btn btn-default btn-circlestars" >{{ $j }}
                        <input type="checkbox" class="hidden" name="stars[]" value="{{ $j }}">
                    </div>
                </div>
                @endfor
            </div>

            <input type="submit" value="JOUER!!!!">
        </form>
    </div>


@endsection

