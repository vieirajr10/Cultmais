<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function inserirCategoria()
    {
        DB::table('categoria')->insert([
            'nome' => 'Turismo',
            'descricao' => 'Explore destinos e culturas.',
        ]);
        DB::table('categoria')->insert([
            'nome' => 'Parque',
            'descricao' => 'Aproveite a natureza ao ar livre.',
        ]);
        DB::table('categoria')->insert([
            'nome' => 'Teatro',
            'descricao' => 'Assista a apresentações ao vivo.',
        ]);
        DB::table('categoria')->insert([
            'nome' => 'Museu',
            'descricao' => 'Descubra arte, história e cultura.',
        ]);

        return 'Categoria inserida com sucesso!';

    }
}
