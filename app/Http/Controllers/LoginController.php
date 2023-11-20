<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('form.login');
    }

    public function store(Request $request)
{
    $credenciais = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ], [
        'email.required' => 'O campo E-mail é obrigatório',
        'email.email' => 'O E-mail não é válido',
        'password.required' => 'O campo Senha é obrigatório',
    ]);

    if (Auth::attempt($credenciais)) {
        $user = Auth::user();

        if ($user->situation == 1 || $user->situation == 2) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        } else {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->back()->with('erro', 'Você não tem permissão para acessar.');
        }
    } else {
        return redirect()->back()->with('erro', 'E-mail ou senha inválida');
    }
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
