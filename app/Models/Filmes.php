<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $table = 'filmes';
    public function relDiretores()
    {
        return $this->hasOne('App\Models\Diretores','id','id_diretor');
    }
}
