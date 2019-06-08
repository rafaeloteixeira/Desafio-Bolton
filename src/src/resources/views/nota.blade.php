<!DOCTYPE html>
<html lang="en">
<head>
<style>

	
pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #333;
  word-break: break-all;
  word-wrap: break-word;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 4px;
}
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arquivei - Desafio Bolton</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
  <h1>chave: {{$chave}}</h1>
  <pre lang="xml" style="height:700px;white-space: pre-wrap;word-break: normal;">{{$xml}}</pre>
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
