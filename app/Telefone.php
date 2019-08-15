<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    

    protected $table = 'telefone';
    protected $fillable= ['numero', 'pessoa_id'];
    public $timestamps = false;

}
