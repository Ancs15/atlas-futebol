@extends('layout.site')

@section('content')

    <!-- BANNER -->
    @include('site.contato.contatobanner')

    <!-- LINKS -->
    @include('site.contato.links')

    <!-- FORMULARIO -->
    @include('site.contato.formulario')

    <!-- MAPA -->
    @include('site.home.mapa')

    <!-- REDES SOCIAIS -->
    @include('site.contato.redessociais')

@endsection