@extends('layouts.main')
@push('styles')
    @vite(['resources/css/home.scss', 'resources/js/app.js'])
@endpush
@section('content')
    Test content
@stop
