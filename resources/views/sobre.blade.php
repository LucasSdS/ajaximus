@extends("template.base")

@section("titulo", "Sobre")

@section('conteudo')

@include('template.menu')

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Sobre a
                    <strong>Bom Lugar Viagens</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-6">
                <img class="img-responsive img-border-left" src={{asset("img/slide-2.jpg")}} alt="">
            </div>
            <div class="col-md-6">
                <p>O site Bom Lugar Viagens foi desenvolvido para proporcionar mais comodidade e conforto quando você ou sua família precisarem viajar.</p>
                <p>Usar o site é muito simples: assim que se registrar no site, você entrará na aba Viagens e marcar a viagem que mais o interessa. O dono da agência entrará em contato com você para a contratação da viagem.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Nossa
                    <strong>Equipe</strong>
                </h2>
                <hr>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src={{asset("img/joaop1.jpg")}} alt="">
                <h3>João Praieiro
                    <small>Empreendedor</small>
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src={{asset("img/joaop2.jpg")}} alt="">
                <h3>João Praieiro
                    <small>Proprietário</small>
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src={{asset("img/joaop3.jpg")}} alt="">
                <h3>João Praieiro
                    <small>CEO</small>
                </h3>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>
<!-- /.container -->

@include('template.footer')


@endsection