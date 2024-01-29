@extends('layouts.app')

@section('content')
    <div class="jumbotron"></div>
    <div class="container">
        <div class="row">
            <h1 class="m-5 text-center">Aggiungi un nuovo fumetto</h1>
        </div>
        <div class="row">
            {{-- title
description
thumb
price
series
sale_date
type --}}
            <form action=" {{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea type="text" class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di vendita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                <button type="submit" class="btn btn-primary mb-5">Aggiungi</button>
            </form>
        </div>
    </div>
@endsection
