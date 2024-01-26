@extends('layouts.app')

@section('content')
    <section>
        <div class="titleCurrentSeries">
            CURRENT SERIES
        </div>
        <div class="d-flex flex-wrap container p-5">

            @foreach ($comics as $comic)
                <div class="cards">
                    <img src=" {{ $comic['thumb'] }} " alt="">
                    <p class="text-uppercase"> {{ $comic['title'] }} </p>
                </div>
            @endforeach

            <div class="more text-white">
                LOAD MORE
            </div>
        </div>
    </section>
@endsection
