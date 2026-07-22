@extends('layout.site')

@section('content')
    


    <!-- BANNER -->
    @include('site.home.banner')
    
    <!-- BEM-VINDO -->
    @include('site.home.bemvindo')
    
    <!-- CATEGORIAS -->
    @include('site.home.categoria')
    
    <!-- PARTIDAS -->
    @include('site.home.partidas')
    
    <!-- DESTAQUE -->
    @include('site.home.destaque')
    
    <!-- GALERIA -->
    @include('site.home.galeria')
    
    <!-- PARCEIROS -->
    @include('site.home.parceiros')
    
    <!-- EQUIPE -->
    @include('site.home.equipe')
    
    <!-- NEWSLETTER -->
    @include('site.home.newsletter')
    
    <!-- DEPOIMENTOS -->
    @include('site.home.depoimentos')
    
    <!-- BLOG -->
    @include('site.home.blog')

    <!-- MAPA -->
    @include('site.home.mapa')



@endsection