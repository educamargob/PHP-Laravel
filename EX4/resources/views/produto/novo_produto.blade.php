@extends('template')
@section('titulo')
Produto - novo
@endsection
@section('conteudo')
    <h1>Novo Produto</h1>
    <form method="post" action="{{ route('produtos_novo') }}">
        @csrf
        <label>Nome</label>
            <input type="text" name="nome"><br>
        <label>Descricao</label>
            <input type="text" name="descricao"><br>
        <label>Fornecedor</label>
            <select name="fornecedor">
                @foreach($fornecedores as $fornecedor)
                    <option value="{{$fornecedor->id}}">{{$fornecedor->nome}}</option>
                 @endforeach
            </select>
            
        <input type="submit" value="Enviar">
    </form>
@endsection
