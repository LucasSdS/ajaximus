<!doctype html>
<html lang="pt-BR">
<head>
    <title>@yield('titulo')</title>

    @yield('css')
</head>
<body>
    @yield('conteudo')

    <script src={{asset("js/jquery.js")}}></script>

    @yield('js')

</body>
</html>