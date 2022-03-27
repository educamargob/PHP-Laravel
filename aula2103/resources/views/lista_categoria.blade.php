<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Categoria de produtos</h1>
    @foreach($categoria as $c)
        <div>
            <a href='{{ $c->nome }}'>{{ $c->nome }}  - Descricao: {{ $c->descricao }}</a> 
        </div>
    @endforeach

</body>
</html>