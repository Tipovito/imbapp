<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;
    protected $fillable = [
        'valor',
        'metragem_total',
        'estado',
        'cidade',
        'cep',
        'complemento',
        'tipo',
        'energia_solar',
        'reuso_agua',
        'teto_verde',
        'fossas_eco',
        'poco_arte',
        'vagas_carro_eletrico',
        'material_sustentavel',
        'pomar',
        'metragem_areaverde',
        'id_users',
        'info_complementar',
        'telefone_vendedor',
    ];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    public function interesses()
    {
        return $this->hasMany(Interesse::class);
    }
}
