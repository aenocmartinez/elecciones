<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('mensaje', 500);
            $table->string('observacion', 500)->nullable();
            $table->enum('estado', ['creado', 'ejecutado', 'fallido', 'programado'])->default('creado');
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();            
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
        Schema::dropIfExists('notificaciones');
    }
}
