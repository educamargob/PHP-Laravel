<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Models\Produto;

class ProdutosController extends Controller
{
    function cadastro_novo(){
        $fornecedores = Fornecedor::all();
        return view('produto.novo_produto', compact('fornecedores'));
    }
    function novo(Request $req){
        #dd($req);
        $nome = $req->input('nome');
        $descricao = $req->input('descricao');
        $fornecedor = $req->input('fornecedor');

        $produto = new Produto();
        $produto->nome = $nome;
        $produto->descricao = $descricao;
        $produto->fornecedor_id = $fornecedor;

        $produto->save();
        

        return redirect()->route('produtos_listar');
    }
    function listar(){
        $fornecedores = Fornecedor::all();
        $produtos = Produto::all();
        return view('produto.lista_produtos', ['produtos' => $produtos], compact('fornecedores'));
    }

    function alterar($id){
        $fornecedores = Fornecedor::all();

        $produto = Produto::findOrFail($id);
        return view('produto.altera_produto',['produto' => $produto], compact('fornecedores'));
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $descricao = $req->input('descricao');
        $fornecedor_id = $req->input('fornecedor');

        $produto = Produto::findOrFail($id);
        $produto->nome = $nome;
        $produto->descricao = $descricao;
        $produto->fornecedor_id = $fornecedor_id;

        $produto->save();


        return redirect()->route('produtos_listar');
    }

    function excluir($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos_listar');

    }
}
