<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('partials.head')
</head>
<body>
    <!-- HEADER -->
    @include('partials.topo')

    <!-- CORPO -->

    <main>
        <!-- CONTEÚDO DA PÁGINA -->
        @yield('content')

    </main>


    <!-- RODAPÉ -->
    @include('partials.rodape')

    <!-- SCRIPTS -->
    @include('partials.scripts')
</body>
</html>