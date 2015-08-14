<div class="brand">Bom Lugar Viagens</div>
<div class="address-bar">Av. Princesa Isabel, 7 | Copacabana, RJ 22011-010 | (21) 2542-5001</div>

<button type="button" class="btn btn-info btn-lg pull-right login" data-toggle="modal" data-target="#ModalLogin">Login</button>
<div class="container">
    <!-- Trigger the modal with a button -->


    <!-- Modal -->
    <div class="modal fade" id="ModalLogin" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <div class="container row">
                        <div class="col-sm-2 col-md-2 col-xs-2 col-lg-1"></div>
                        <form class="form-signin col-sm-10 col-md-10 col-xs-10 col-lg-10">
                            <label for="inputEmail" class="sr-only">Email</label>
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                            <label for="inputPassword" class="sr-only">Senha</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                            <a href="#">Ainda não é cadastrado? Cadastre-se</a>
                        </form>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Navigation -->
<div id="menu">
<nav class="navbar navbar-default barra" role="navigation">
    <div class="container">
        <!-- Menu mobile -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="/">Bom Lugar Viagens</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav row">
                <li class="col-sm-3 col-xs-12 col-md-3"> <!-- Colocar as rows, começar da menor -->
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li class="col-sm-3 col-xs-12 col-md-3">
                    <a href="{{url('sobre')}}">Sobre</a>
                </li>
                <li class="col-sm-3 col-xs-12 col-md-3">
                    <a href="{{url('viagens')}}">Viagens</a>
                </li>
                <li class="col-sm-3 col-xs-12 col-md-3">
                    <a href="{{url('contato')}}">Contato</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>

    <!-- /.container -->
</nav>
</div>