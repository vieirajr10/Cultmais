<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Local as Authenticatable;

class Local extends Model
{
    use HasFactory;
    protected $table = 'local';
    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'rua',
        'bairro',
        'cep',
        'regiao',
        'cidade',
        'estado',
        'coordenadas',
        'user_id',
        'categoria_id',
        'regiao_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function regiao()
    {
        return $this->belongsTo(Regiao::class, 'regiao_id');
    }

    public function curtidas()
    {
    return $this->hasMany(Curtida::class, 'local_id');
    }


}
