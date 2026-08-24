<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('partials.site.head')
</head>
<body class="home page-template-default page page-id-5136 theme-bigslam gdlr-core-body woocommerce-no-js bigslam-body bigslam-body-front bigslam-full gdlr-core-link-to-lightbox">
    <!-- HEADER -->
    @include('partials.site.topo')

    <!-- CORPO -->

    <main class="bigslam-page-wrapper gdlr-core-page-builder-body">
        <!-- CONTEÚDO DA PÁGINA -->
        @yield('content')

    </main>


    <!-- RODAPÉ -->
    @include('partials.site.rodape')

    <!-- SCRIPTS -->
    @include('partials.site.scripts')
</body>
</html>