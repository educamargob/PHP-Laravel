<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    //
    function produto_novo(){
        return view('novo_produto');
    }
    function novo(Request $req){
        #dd($req);
        $nome = $req->input('nome');
        $descricao = $req->input('descricao');
        $categoria = $req->input('categoria');

        $produto = new Produto();
        $produto->nome = $nome;
        $produto->descricao = $descricao;
        $produto->categoria_id = $categoria;

        $produto->save();
        

        return redirect()->route('produto_listar');
    }
    function listar(){
        $produto = Produto::with('categoria')->get();
        $categoria = Categoria::with('produtos')->get();
        return view('lista_produtos', ['produto' => $produto, 'categoria' => $categoria]);
    }
}
