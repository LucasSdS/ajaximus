@extends("template.base")

@section("titulo","Pagina Inicial")

@section("css")
    <link rel = "stylesheet" href = "{{ asset('css/home.css') }}">
@endsection

@section("conteudo")


    <hr>
    <br>
    <p>Estes são os Posts existentes</p>
    <br>

    <ul id = "posts">
        @foreach($posts as $post)
            <li>
                <h3>Titulo: {{$post->titulo}}</h3><p> - Conteudo: {{$post->conteudo}}</p>
            </li>
        @endforeach
    </ul>

    <button id = "cadastraPost">Cadastrar</button>

    <br>
    <br>
    <br>

    <div id = "formCadastraPost">
        {!! csrf_field() !!}
        {!! method_field("put") !!}
        <label for = "titulo">Titulo</label>
        <input type = "text" name = "titulo" id = "titulo">
        <br>
        <label for = "conteudo">Conteudo</label>
        <input type = "text" name = "conteudo" id = "conteudo">
        <br> <br>
        <input type = "submit" value="Enviar" id = "enviaPost">
    </div>

@endsection

@section("js")
    <script src = "{{ asset('js/home.js') }}"></script>
@endsection