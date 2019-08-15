<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pessoa extends Model
{
    use SoftDeletes;
    protected $table = 'pessoa';
    protected $fillable= ['nome'];

    
    public function telefones(){
        return $this->hasMany('App\Telefone');
    }
}

