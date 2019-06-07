<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel 5.8 & MySQL CRUD Tutorial</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
  <h3>Home</h3>
  <div class="form-group">
  <div class="form">
    <form method="get" action="{{ route('routeSalvarNotas')}}">
        <input type="text" class="textbox" placeholder="Search" name="chave">
        <button type="submit" id="submitButton" class="btn btn-primary">Buscar NF-e</button>
    </form>
    <form method="get" action="{{ route('routeBuscarNota')}}">
        <input type="text" class="textbox" placeholder="Search" name="chave">
        <button type="submit" id="submitButton" class="btn btn-primary">Buscar NF-e</button>
    </form>
    </div>
</div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
