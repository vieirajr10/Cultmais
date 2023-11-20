<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regiao;
use Illuminate\Support\Facades\DB;

class RegiaoController extends Controller
{
    public function inserirRegiao()
    {
        DB::table('regiao')->insert([
            'nome' => 'Norte',
        ]);
        DB::table('regiao')->insert([
            'nome' => 'Nordeste',
        ]);
        DB::table('regiao')->insert([
            'nome' => 'Centro-Oeste',
        ]);
        DB::table('regiao')->insert([
            'nome' => 'Sudeste',
        ]);
        DB::table('regiao')->insert([
            'nome' => 'Sul',
        ]);

        return 'Regiao inserida com sucesso!';

    }
}
