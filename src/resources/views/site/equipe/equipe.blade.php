@extends('layout.site')

@section('content')
 
<!-- BANNER -->
@include('site.equipe.equipebanner')

<!-- APRESENTAÇÃO -->
@include('site.equipe.apresentacao')

<!-- EQUIPE -->
@include('site.equipe.equipeprincipal')

<!-- CHAMADA DE AÇÃO -->
@include('site.equipe.atencao')

@endsection