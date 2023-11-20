<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\CadastroAprovado;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function listarUsuarios()
    {
        $usuarios = User::where('situation', 0)->get();
        return view('lista', compact('usuarios'));
    }
    public function ExcluirUsuarios()
    {
        $usuarios = User::where('situation', 1)->get();
        return view('excluir', compact('usuarios'));
    }

    public function cadastrarUsuario($id)
    {
        $usuario = User::find($id);
        if ($usuario) {
            $usuario->situation = '1';
            $usuario->save();

            $emailDestino = $usuario->email;

            Mail::to($emailDestino)->send(new CadastroAprovado());
        }
        return redirect()->route('listar.usuarios');
    }

    public function excluirUsuario($id)
    {
        $usuario = User::find($id);
        if ($usuario->situation=="0") {
            $usuario->delete();
            return redirect()->route('listar.usuarios');
        }else if ($usuario->situation == '1') {
            $usuario->nome = 'Usuário Excluído';
            $usuario->situation = '3';
            $usuario->save();
            return redirect()->route('home');
        }
        else if ($usuario->situation == '2') {
            session()->flash('alert', "Não é possível excluir um administrador.");
            return redirect()->route('home');
        }     
        
    }
}
