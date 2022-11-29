<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interesse extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_anuncios',
        'id_user_interessado',
        'cotacao',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function anuncio(){
        return $this->belongsTo('App\Models\Anuncio');
    }
}


