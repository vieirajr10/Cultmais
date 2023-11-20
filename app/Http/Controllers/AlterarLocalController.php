<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\Categoria;
use App\Models\Regiao;
use App\Models\Curtida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AlterarLocalController extends Controller
{
    public function create(Request $request)
    {
        $localId = $request->route('localId');
        $local = Local::find($localId);
    
        if (!$local) {
            return redirect()->route('home')->with('error', 'Local não encontrado.');
        }
    
        $categorias = Categoria::all();
        $regioes = Regiao::all();
    
        return view('form.alterar_local', compact('local', 'categorias', 'regioes'));
    }

    public function store(Request $request, $localId) {
        $local = Local::find($localId);
    
        $local->nome = $request->input('nome');
        $local->descricao = $request->input('descricao');

        if (!$request->hasFile('imagem')) {
            
        }

        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem');
            $imageName = time() . '.' . $imagemPath->getClientOriginalExtension();
            $imagemPath->move(public_path('storage/imagens'), $imageName);
            $local->imagem = $imageName;
        }

        $local->categoria_id = $request->input('categoria_id');
        $local->regiao_id = $request->input('regiao_id');
        $local->rua = $request->input('rua');
        $local->bairro = $request->input('bairro');
        $local->cep = $request->input('cep');
        $local->cidade = $request->input('cidade');
        $local->estado = $request->input('estado');
        $local->latitude = $request->input('latitude');
        $local->longitude = $request->input('longitude');
        
    
        $local->save();
    
        
    
        return redirect()->route('home'); 
    }

    public function excluir($localId) {
        $local = Local::find($localId);
    
        if (!$local) {
            return redirect()->back()->with('error', 'Local não encontrado.');
        }
    
        Curtida::where('local_id', $local->id)->delete();

        $local->delete();
    
        return redirect()->route('home')->with('success', 'Local excluído com sucesso.');
    }
    
}
