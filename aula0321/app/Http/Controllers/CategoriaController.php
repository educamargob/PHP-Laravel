<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    //
    function categoria_nova(){
        return view('nova_categoria');
    }
    function novo(Request $req){
        #dd($req);
        $nome = $req->input('nome');
        $descricao = $req->input('descricao');

        $categoria = new Categoria();
        $categoria->nome = $nome;
        $categoria->descricao = $descricao;

        $categoria->save();
        

        return redirect()->route('categoria_listar');
    }
    function listar(){
        $categoria = Categoria::all();
        return view('lista_categoria', ['categoria' => $categoria]);
    }
}
