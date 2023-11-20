<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Local;
use App\Models\Regiao;
use App\Models\User;
use App\Models\Curtida;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        $locais = Local::all();

        $curtidasUsuarios = User::withCount(['curtidas as total_curtidas' => function ($query) {
                $query->select(DB::raw('count(*)'));
            }])
            ->orderByDesc('total_curtidas')
            ->limit(10)
            ->get();

        return view('home', ['locais' => $locais, 'usuarios' => $usuarios, 'curtidasUsuarios' => $curtidasUsuarios]);
    }


    public function showLocal($localId)
    {
        $local = Local::findOrFail($localId);
        $curtidas = $local->curtidas;
        $usuariosQueCurtiram = $curtidas->pluck('user_id');

        return view('show_local', [
            'local' => $local,
            'curtidas' => $curtidas,
            'usuariosQueCurtiram' => $usuariosQueCurtiram,
        ]);
    }

    public function filterByCategory($categoryId) {
        $filteredLocals = Local::where('categoria_id', $categoryId)->get();
        $usuarios = User::take(10)->get();

        $curtidasUsuarios = User::withCount(['curtidas as total_curtidas' => function ($query) {
            $query->select(DB::raw('count(*)'));
        }])
        ->orderByDesc('total_curtidas')
        ->limit(10)
        ->get();

        foreach ($usuarios as $key => $usuario) {
            $usuario->rank = $key + 1;
        }

        return view('home', ['locais' => $filteredLocals, 'usuarios' => $usuarios, 'curtidasUsuarios' => $curtidasUsuarios]);
    }

    public function filterByRegion($regionID) {
        $filteredLocals = Local::where('regiao_id', $regionID)->get();

        $usuarios = User::take(10)->get();

        $curtidasUsuarios = User::withCount(['curtidas as total_curtidas' => function ($query) {
            $query->select(DB::raw('count(*)'));
        }])
        ->orderByDesc('total_curtidas')
        ->limit(10)
        ->get();

        foreach ($usuarios as $key => $usuario) {
            $usuario->rank = $key + 1;
        }
    
        return view('home', ['locais' => $filteredLocals, 'usuarios' => $usuarios, 'curtidasUsuarios' => $curtidasUsuarios]);
    }

    public function showRecentes()
    {
        $recentLocals = Local::orderBy('created_at', 'desc')->take(9)->get();
        $usuarios = User::take(10)->get();

        $curtidasUsuarios = User::withCount(['curtidas as total_curtidas' => function ($query) {
            $query->select(DB::raw('count(*)'));
        }])
        ->orderByDesc('total_curtidas')
        ->limit(10)
        ->get();

        foreach ($usuarios as $key => $usuario) {
            $usuario->rank = $key + 1;
        }

        return view('home', ['locais' => $recentLocals, 'usuarios' => $usuarios, 'curtidasUsuarios' => $curtidasUsuarios]);
    }

    private function verificarCurtida($localId)
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $curtidaExistente = Curtida::where('local_id', $localId)
                ->where('user_id', $userId)
                ->exists();

            return $curtidaExistente;
        }

        return false;
    }
    
}








