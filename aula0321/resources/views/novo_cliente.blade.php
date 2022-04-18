<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>novo Cliente</title>
</head>
<body>
    <h1>Novo Cliente</h1>
    <form method="post" action="{{ route('clientes_novo') }}">
        @csrf
        <label>Nome</label>
        <input type="text" name="nome"><br>
        <label>Telefone</label>
        <input type="text" name="telefone"><br>
        <label>Renda</label>
        <input type="text" name="renda"><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>