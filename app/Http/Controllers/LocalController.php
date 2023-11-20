<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\Categoria;
use App\Models\Regiao;
use App\Models\User;
use App\Models\Curtida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class LocalController extends Controller
{
    public function index()
    {
        $locais = Local::all();
        $categorias = Categoria::all();
        return view('form.index', compact('locais'));
    }

    public function store(Request $request)
    {

        $local = new Local();
        $local->user_id = Auth::id();
        $local->nome = $request->input('nome');
        $local->descricao = $request->input('descricao');

        if (!$request->hasFile('imagem')) {
            session()->flash('erro', 'Por favor, adicione uma imagem.');
            return redirect()->back();
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

    private function loadCommonData()
    {
        $categorias = Categoria::all();
        $regioes = Regiao::all();

        return compact('categorias', 'regioes');
    }
    public function showForm()
    {
        $data = $this->loadCommonData();
        return view('form.cadastro_local', $data);
    }

    public function categoria()
    {
        $data = $this->loadCommonData();
        return view('form.cadastro_local', $data);
    }

    public function create()
    {
        $data = $this->loadCommonData();
        return view('form.cadastro_local', $data);
    }

    public function show($id)
    {
        $local = Local::find($id);

        if (!$local) {
            abort(404);
        }

        $user = User::find($local->user_id);
        $curtidas = Curtida::where('local_id', $id)->with('usuario')->get();
        return view('carregar_local', compact('local', 'user', 'curtidas'));
    }
    

}
