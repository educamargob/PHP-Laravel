<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    function cadastro(){
       return view('produto_novo');
    }

    function listar(){
        $produtos = Produto::all();
        return view('lista_produtos', ['produtos' => $produtos]);
    }

    function exibir($slug){
        $produto = Produto::where('slug', '=', $slug)->first();
        return view('exibe_produto', ['produto' => $produto]);
    }

    function novo(Request $req){
        $produto = new Produto();
        $produto->nome = $req->input('nome');
        $produto->slug = "";
        $produto->caminho = "";
        $produto->save();

        $produto->slug = Str::slug("{$produto->nome} {$produto->id}");
        $produto->save();

        $imagem = $req->file('arquivo');
        $caminho_arquivo = $imagem->storeAs('produtos',"{$produto->id}.{$imagem->extension()}" );
        $produto->caminho = "/storage/$caminho_arquivo";
        $produto->save();

        return redirect()->route('produtos_listar');
    }
}
