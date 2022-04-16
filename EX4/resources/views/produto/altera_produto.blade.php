@extends('template')
@section('titulo')
Alterar - Produto 
@endsection
@section('conteudo')
    <h1>Novo Produto</h1>
    <form method="post" action="{{ route('produtos_salvar') }}">
        @csrf
        <input type="hidden" name="id" value="{{$produto->id}}">
        <label>Nome</label>
            <input type="text" name="nome" value="{{$produto->nome}}"><br>
        <label>Descricao</label>
            <input type="text" name="descricao" value="{{$produto->descricao}}"><br>
        <label>Fornecedor</label>
            <select name="fornecedor">
                @foreach($fornecedores as $fornecedor)
                   @if($fornecedor->id == $produto->fornecedor_id)
                        <option value="{{$fornecedor->id}}" selected>{{$fornecedor->nome}}</option>
                    @else
                        <option value="{{$fornecedor->id}}">{{$fornecedor->nome}}</option>
                    @endif
                    
                 @endforeach
            </select>
            
        <input type="submit" value="Enviar">
    </form>
@endsection
