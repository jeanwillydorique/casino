@extends('layouts.app')


@section('title', 'WiLLoto')


@section('content')

    <div class="game">

        <form method="post" action="/draw">
            @csrf

            <div class="numberticket">
                @for ($i = 1; $i < 50; $i++)
                <div class="button" >
                    <input type="button" class="btn btn-default btn-circle" value = "{{ $i }}">
                    <input type="checkbox" class="hidden" name="number[]" value="{{ $i }}">
                </div>
                @endfor
            </div>


            <div class="starsticket">
                @for ($j = 1; $j < 8; $j++)
                <div class="buttonstar" >
                        <input type="button" class="btn btn-default btn-circlestars" value = "{{ $j }}">
                        <input type="checkbox" class="hiddenstar" name="star[]" value="{{ $j }}">
                    </div>
                @endfor
            </div>

            <input type="submit" value="JOUER!!!!">
        </form>
    </div>


@endsection

