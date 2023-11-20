<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curtida;
use App\Models\Local;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class CurtidaController extends Controller
{
    
    
    public function curtir(Request $request)
    {
        $user = auth()->user();
        $locais = Local::all();

        if ($user) {
            $user_id = $user->id;
            $local_id = $request->input('local_id');
    
            $curtidaExistente = Curtida::where('user_id', $user_id)
                ->where('local_id', $local_id)
                ->first();
    
            if (!$curtidaExistente) {
                DB::table('curtidas')->insert([
                    'user_id' => $user_id,
                    'local_id' => $local_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
    
                session()->forget('local');

            } else {

                Curtida::where('user_id', $user_id)
                    ->where('local_id', $local_id)
                    ->delete();

            }
        }
        
        return redirect()->back();

    }

    public function removerCurtida($id)
    {
        $user = auth()->user();
        $locais = Local::all();

        if ($user) {
            $user_id = $user->id;

            $curtida = Curtida::find($id);

            if ($curtida && $curtida->user_id === $user_id) {
                $local_id = $curtida->local_id;

                $curtida->delete();
            }
        }

        return redirect()->back();

    }


}