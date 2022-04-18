@extends('template')
@section('conteudo')
@routes
<table class="table">
    <h1>Produtos do fornecedor <strong>{{$fornecedor->nome}}<strong></h1>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descricao</th>
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nome }}</td>
            <td>{{ $p->descricao }}</td>
            <td>
                <a href="{{ route('produtos_alterar', ['id' => $p->id])}}" class="btn btn-warning">Alterar</a>
                <a href="#" onclick="excluir( {{ $p->id }})" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
    function excluir(id){
        if(confirm(`Deseja realmente excluir o produto ${id}?`)){
            location.href = route('produtos_excluir', {'id':id});
        }
    }
</script>
@endsection