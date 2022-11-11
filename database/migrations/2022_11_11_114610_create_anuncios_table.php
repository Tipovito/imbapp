<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabela_anuncios', function (Blueprint $table) {
            $table->id();
            $table->float('valor');
            $table->float('metragem_total');
            $table->string('estado');
            $table->string('cidade');
            $table->float('cep');
            $table->text('complemento');
            $table->string('tipo');
            $table->string('energia_solar');
            $table->string('reuso_agua');
            $table->string('teto_verde');
            $table->string('fossas_eco');
            $table->string('poco_arte');
            $table->string('vagas_carro_eletrico');
            $table->string('material_sustentavel');
            $table->string('pomar');
            $table->float('metragem_areaverde');
            $table->integer('id_users');
            $table->string('info_complementar');
            $table->timestamps();
            
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabela_anuncios');
    }
};
