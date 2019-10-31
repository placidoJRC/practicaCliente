<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            
            $table->bigIncrements('id');
            $table->string('nombre', 50);
            $table->string('apellidos',100);
            $table->string('correo', 50);
            $table->integer('tlf')->nullable();
            $table->string('clave', 50);
            $table->string('dirrecion', 100)->nullable();
            $table->integer('ip')->nullable();
            $table->string('estado', 50)->nullable();
            $table->date('nacimiento');
            $table->integer('sueldo_anual')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
            
            $table->unique(['nombre', 'apellidos','nacimiento']);
            $table->unique(['correo']);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
