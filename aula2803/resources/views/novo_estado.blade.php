@extends('template')
@section('titulo')
Estado - novo
@endsection
@section('conteudo')
    <h1>Novo estado</h1>
    <form method="post" action="{{ route('estados_novo') }}">
        @csrf
        <label>Nome</label>
        <input type="text" name="nome"><br>
        <label>Sigla</label>
        <input type="text" name="sigla"><br>

        <input type="submit" value="Enviar">
    </form>
@endsection