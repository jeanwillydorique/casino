@extends('layouts.app')


@section('title', 'WiLLoto')


@section('content')
     

<div class="game">

    <div class="result">
        <div class="rands">
            @foreach ($rands as $rand)
                <div class="button">
                    <input type='button' class="btn btn-default btn-circle" value="{{ $rand }}" >
                </div>
            @endforeach
        </div>

        <div class="numbers">
            @foreach ($numbers as $number)
                <div class="button">
                    <input type='button' 
                        @if (in_array($number, $rands))
                            class="btn btn-default btn-circle good"
                        @else 
                            class="btn btn-default btn-circle false"
                        @endif
                        value="{{ $number }}" >
                </div>
            @endforeach
        </div>


        @if ( $falsenumbers > $goodnumbers )
            <p> Vous avez {{ $falsenumbers }} faux numéros</p>
        @else
            <p> Vous avez {{ $goodnumbers }} bons numéros</p>
        @endif


            <div class="starrand">
                @foreach ($starrands as $starrand)
                    <div class="button">
                        <input type='button' class="btn btn-default btn-circle" value="{{ $starrand }}" >
                    </div>
                @endforeach
            </div>
    
            <div class="stars">
                @foreach ($stars as $star)
                    <div class="button">
                        <input type='button' 
                            @if (in_array($star, $starrands))
                                class="btn btn-default btn-circle good"
                            @else 
                                class="btn btn-default btn-circle false"
                            @endif
                            value="{{ $star }}" >
                    </div>
                @endforeach
            </div>
    
    
            @if ( $falsestar > $goodstar )
                <p> Vous avez {{ $falsestar }} fausses étoiles</p>
            @else
                <p> Vous avez {{ $goodstar }} bonnes étoiles</p>
            @endif

</div>

@endsection

