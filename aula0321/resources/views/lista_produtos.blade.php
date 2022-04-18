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
    @foreach ($categoria as $c)
        <div>
           * {{ $c->nome }}  - Descricao: {{ $c->descricao }}
        </div>
        @foreach($produto as $p)
            @if($p->categoria_id == $c->id)
                <div style="margin-left: 20px">
                    - {{ $p->nome }}  - Descricao: {{ $p->descricao }}
                </div>
            @endif
        @endforeach
    @endforeach
    

</body>
</html>