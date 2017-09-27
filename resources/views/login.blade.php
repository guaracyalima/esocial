<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <title>Recadastramento Funcional</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/style.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container container-login" style="margin-top:100px">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text-center">Recadastramento Funcional</h3>
                    </div>

                    <div class="panel-body">
                        <form id="login" method="post" action="{{ url('/login') }}">
                            <div id="retorno_msg">
                            </div>
                            <label for="cpf-funcionario"> Digite seu CPF: </label>
                            <div style="margin-bottom: 12px" class="input-group">
                                <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" id="cpf-funcionario" class="form-control" name="cpf" placeholder="CPF" maxlength="11" pattern="[0-9]+$" required="required">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                            </div>

                            <button type="submit" id="button-login" class="btn btn-success">
                                Entrar
                            </button>

                            <hr style="margin-top:10px; margin-bottom:10px;" >

                            <div class="form-group">

                                <div style="font-size:85%">
                                    Não consegeu acessar!
                                    <a href="#">
                                        Veja aqui 
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('input#cpf-funcionario').keyup(function () {
                $(this).val(this.value.replace(/\D/g, ''));
            });
        </script>
        <script src="js/login.funcionario.js"></script>
    </body>
</html>
