<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $table = 'filmes';
    protected $fillable = [ 'title','id_diretor','duracao','pais','ano'];
    public function relDiretores()
    {
        return $this->hasOne('App\Models\Diretores','id','id_diretor');
    }
}
