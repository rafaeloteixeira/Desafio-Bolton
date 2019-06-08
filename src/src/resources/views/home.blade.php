<!DOCTYPE html>
<html lang="en">
<head>        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arquivei - Desafio Bolton</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
  <div class="title m-b-md">
    Desafio Bolton com Laravel
  </div>
  <div class="form-group">
  <div class="form">
    

    <form class="form-inline" method="get" action="{{ route('routeBuscarNota')}}">
      <div class="form-group mb-1" >
        <label for="InputNota" >Chave de acesso: </label>
      </div>
      <div class="form-group mx-sm-3 mb-2">
      <input type="text" name="chave" class="form-control" id="InputNota" placeholder="Buscar">
      </div>
      <div class="form-group mx-sm-1 mb-2">
        <button type="submit" id="submitButton" class="btn btn-primary">Buscar</button>
      </div>
    </form>
    <a href="{{ route('routeSalvarNotas')}}" >Clique aqui para buscar as notas e salvar no banco de dados</a>
    </div>
</div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
