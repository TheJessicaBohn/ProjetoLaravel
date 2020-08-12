<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diretores extends Model
{
    protected $table = 'diretores';
    //protected $fillable = [ 'title','id_diretor','duracao','origem','ano'];
    
    public function relFilmes()
    {
        return $this->hasMany('App\Models\Filmes','id_diretor');
    }
}