<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>novo Categoria</title>
</head>
<body>
    <h1>Nova Categoria</h1>
    <form method="post" action="{{ route('categoria_nova') }}">
        @csrf
        <label>Nome</label>
        <input type="text" name="nome"><br>
        <label>Descricao</label>
        <input type="text" name="descricao"><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>