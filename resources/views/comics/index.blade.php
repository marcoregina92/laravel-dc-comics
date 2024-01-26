@extends('layouts.app')

@section('content')
    {{-- HEADER --}}
    <header class="d-flex container-fluid justify-content-between">
        <img class="mt-4" src="assets/img/dc-logo.png" alt="">
        <nav class="d-flex align-items-center">
            @foreach ($dati['menuLink'] as $menuLink)
                <a class="linkItem px-3" href="">{{ $menuLink['link'] }}</a>
            @endforeach
        </nav>
        <form class="form-inline d-flex align-items-center">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <i class="fa-solid fa-magnifying-glass mx-2"></i>
        </form>
    </header>

    {{-- JUMBOTRON --}}

    <div class="jumbotron"></div>

    {{-- CURRENT SERIES SECTION --}}

    <section>
        <div class="titleCurrentSeries">
            CURRENT SERIES
        </div>
        <div class="d-flex flex-wrap container p-5">

            @foreach ($comics as $comic)
                <div class="cards">
                    <a href="{{ route('comics.show', $comic['id']) }}">
                        <img class="comics" src=" {{ $comic['thumb'] }} " alt="">
                        <p class="text-uppercase titleComics"> {{ $comic['title'] }} </p>
                    </a>
                </div>
            @endforeach

            <div class="more text-white">
                LOAD MORE
            </div>
        </div>
    </section>
@endsection
