$(document).ready(
    function(){

        $('#cadastraPost').click(
            function(){
                $('#formCadastraPost').css('display', 'block');
            }
        );

        $('#enviaPost').click(
            function(){
                var titulo = $('#titulo').val();
                var conteudo = $('#conteudo').val();
                var token = $("input[name='_token']").val();
                var method = $("input[name='_method']").val();
                $.ajax(
                    {
                        method: "post",
                        url: 'post',
                        dataType: 'json',
                        data: {
                            titulo: titulo,
                            conteudo: conteudo,
                            _token: token,
                            _method: method
                        },
                        success: function(data){
                            alert(data.msg);
                            $('#posts').append(
                                '<li><h3>'
                                + titulo
                                + '</h3> - <p>'
                                + conteudo
                                + '</p> </li>'
                            );
                        }

                    }
                );


            }
        );
    }
);