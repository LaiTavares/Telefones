<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Pessoa,Telefone};

class PessoaController extends Controller{

    public function index(){
        $pessoas = Pessoa::all();
        $pessoasDeletadas = Pessoa::onlyTrashed()->get();
        return view('index', compact('pessoas','pessoasDeletadas'));
    }
    
    public function cadastrar(){
        return view('form');
    }

    public function store(Request $request){
        $dados = $request->all();
        
        $pessoa = Pessoa::create($dados);
        $pessoa->telefones()->createMany($dados['telefone']);
        
        return redirect('/');
        

    }
    public function editar($id){
        $pessoa = Pessoa::findOrFail($id);
        return view('form', compact('pessoa'));
    }
    public function update(Request $request, $id){
    
        $pessoa = Pessoa::findOrFail($id);
        $dados = $request->all();


        $pessoa->update($dados);
        foreach($dados['telefone'] as $key => $telefone) {
            Telefone::findOrFail($key)->update($telefone);
        }
        return redirect('/');

    }
    public function delete($id){
        $pessoa = Pessoa::findOrFail($id);
        if($pessoa->trashed()){
            $pessoa->restore();
            $pessoa->update();
        } else {
            $pessoa->delete();
        }
        

        return redirect('/');
    }

}
