<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curtida extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'local_id'];

    public function local()
    {
        return $this->belongsTo(Local::class, 'local_id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id'); // Certifique-se de usar a coluna correta aqui
    }
}


