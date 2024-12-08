<?php

namespace App\Http\Controllers;

use App\Models\Filmes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validate;

class FilmesController extends Controller
{

    public function showHome(){
        return view('home');
    }

    public function showCadastro(){
        return view('cadastro');
    }

    //cadastrar
    function CadastrarFilme(Request $request){

        $registros = $request->validate([
            'nomeFilme'=>'string|required',
            'duracaoFilme'=>'string|required',
            'roteiristaFilme'=>'string|required',
            'classidadeFilme'=>'string|required'
        ]);

        Filmes::create($registros);
        return redirect()->route('home')->with('success', 'Filme cadastrado com sucesso!');
    }

    //deletar
    public function destroy(Filmes $id){
        $id->delete();
        return view('home');
    }

    //alterar
    public function update(Filmes $id, Request $request){
        $registros = $request->validate([
            'nomeFilme'=>'string|required',
            'duracaoFilme'=>'string|required',
            'roteiristaFilme'=>'string|required',
            'clssidadeFilme'=>'string|required'
        ]);
        $id->fill($registros);
        $id->save();
        return view('home');
    }

    //mostra os Filmes
    public function ShowFilmes(Request $request){
        $registros = Filmes::query();
        $registros->when($request->nomeFilme,function($query,$valor){
            $query->where('nomeFilme','like','%'.$valor.'%');
        });
        $todosRegistros = $registros->get();
        return view('gerenciar',['registrosFilmes'=>$todosRegistros]);
    }

    public function MostrarFilmeCodigo(Filmes $id){
        return view("alterar",['registrosFilmes'=>$id]);
    }
}
