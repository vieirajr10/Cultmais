<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('form.index', compact('users'));
    }

    public function create()
    {
        return view('form.cadastro_empresa');
    }

    public function store(Request $request)
    {

        $situacao = $request->input('situation');
        if ($situacao === '1' || $situacao === '2') {
        $user = User::find($request->input('id'));
        $user->nome = $request->input('nome');
        $user->cnpj = $request->input('cnpj');
        $user->telefone = $request->input('telefone');
        $user->email = $request->input('email');
        $user->site = $request->input('site');

        //30/10/2022
        if (!empty($request->input('senha'))) {
        $user->password = Hash::make($request->input('senha'));
        }        
    
        if ($request->hasFile('profile')) {
            $imagemPath = $request->file('profile');
            $imageName = time() . '.' . $imagemPath->getClientOriginalExtension();
            $imagemPath->move(public_path('storage/profile'), $imageName);
            $user->profile = $imageName;
        }
        
        $user->save();
        } else {
        $user = new User();
        $user->nome = $request->input('nome');
        $user->cnpj = $request->input('cnpj');
        $user->telefone = $request->input('telefone');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('senha'));
        $user->site = $request->input('site');

       
    
        if ($request->hasFile('profile')) {
            $imagemPath = $request->file('profile');
            $imageName = time() . '.' . $imagemPath->getClientOriginalExtension();
            $imagemPath->move(public_path('storage/profile'), $imageName);
            $user->profile = $imageName;
        }
        if (!$request->hasFile('profile')) {
            $user->profile = "default_profile.jpg";
        }
        $user->save();

        }

        return redirect()->route('home');
    }
    public function show($id)
    {
        $user = User::find($id);
    
        return view('carregar_empresa', compact('user'));
    }
    
}

