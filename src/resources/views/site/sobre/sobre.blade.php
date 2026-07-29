@extends('layout.site')

@section('content')
    
    <!-- BANNER -->
    @include('site.sobre.secbanner')

    <!-- SOBRE -->
    @include('site.sobre.secsobre')

    <!-- CONTAGEM -->
    @include('site.sobre.contagem')

    <!-- DIFERENCIAL -->
    @include('site.sobre.diferencial')

    <!-- PARCEIROS -->
    @include('site.home.parceiros')

@endsection