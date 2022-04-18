<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>novo Produto</title>
</head>
<body>
    <h1>Novo Produto</h1>
    <form method="post" action="{{ route('produto_novo') }}">
        @csrf
        <label>Nome</label>
        <input type="text" name="nome"><br>
        <label>Descricao</label>
        <input type="text" name="descricao"><br>
        <label>categoria</label>
        <input type="number" name="categoria"><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>