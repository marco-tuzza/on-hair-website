@extends('layouts.main')
@push('styles')
    @vite(['resources/css/home.scss', 'resources/js/app.js'])
@endpush
@section('content')
    <div id="jumbotron">
        <div id="jumbotron-text">
            <h1>On Hair <br> Barber Shop</h1>
            <h2>Accendiamo il tuo stile</h2>
            <a class="button" href="/">PRENOTA ORA UN APPUNTAMENTO</a>
        </div>
    </div>
@stop
