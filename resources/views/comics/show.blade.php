@extends('layouts.app')

@section('content')
    {{-- HEADER --}}
    <header class="d-flex container-fluid justify-content-between">
        <img class="mt-4" src="/assets/img/dc-logo.png" alt="">
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

    <div class="container">
        <div class="row cardDetail">
            <img class="comicDetail" src="{{ $detail->thumb }}" alt="">
            <h2 class="mt-5">{{ $detail->title }}</h2>
            <p class="mt-4">{{ $detail->description }}</p>
        </div>
    </div>
@endsection
