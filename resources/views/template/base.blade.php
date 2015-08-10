<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap Core CSS -->
    <link href={{asset("css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Custom CSS -->
    <link href={{asset("css/business-casual.css")}} rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src={{asset("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js")}}></script>
    <script src={{asset("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js")}}></script>
    <title>@yield('titulo')</title>
</head>
<body>
    @yield('conteudo')

            <!-- jQuery -->
    <script src={{asset("js/jquery.js")}}></script>

    <!-- Bootstrap Core JavaScript -->
    <script src={{asset("js/bootstrap.min.js")}}></script>
</body>
</html>