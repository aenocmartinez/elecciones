<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 250);
            $table->string('cedula', 15)->unique();
            $table->string('telefono', 10);
            $table->string('comuna', 80)->nullable();
            $table->string('barrio', 150)->nullable();
            $table->string('direccion', 200)->nullable();
            $table->date('fec_nac')->nullable();
            $table->boolean('sexo')->default(1);
            $table->enum('estrato', ['-1', '0', '1', '2', '3', '4', '5', '6'])->default(-1);
            $table->foreignId('lider_id')->nullable();
            $table->enum('comite', ['Ninguno', 'Juventudes', 'Mujeres', 'Empresarios', 'Profesionales'])->default('Ninguno');
            $table->integer('pacto_num_votos')->nullable();
            $table->enum('tipo_voto', ['Voto duro', 'Voto blando', 'No interesado', 'No evaluado'])->default('No evaluado');
            $table->enum('contactado', ['Contactado', 'No contactado', 'Contacto fallido'])->default('No contactado');
            $table->enum('categoria', ['No asignado'])->default('No asignado');
            $table->string('lugar_votacion', 250)->nullable();
            $table->string('mesa_votacion', 20)->nullable();
            $table->string('latitud', 50)->nullable();
            $table->string('longitud', 50)->nullable();
            $table->string('creado_por', 250);
            $table->timestamps();

            $table->foreign('lider_id')->references('id')->on('votantes')->onDelete('cascade');
            $table->unique(['lider_id', 'cedula']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votantes');
    }
}
