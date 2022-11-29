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
            $table->text('complemento')->nullable();
            $table->string('tipo');
            $table->string('energia_solar')->nullable();
            $table->string('reuso_agua')->nullable();
            $table->string('teto_verde')->nullable();
            $table->string('fossas_eco')->nullable();
            $table->string('poco_artesiano')->nullable();
            $table->string('vagas_carro_eletrico');
            $table->string('material_sustentavel')->nullable();
            $table->string('pomar')->nullable();
            $table->float('metragem_areaverde')->nullable();
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
