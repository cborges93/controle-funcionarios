<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('telefone');
            $table->date('nascimento');
            $table->string('CPF')->unique();
            $table->string('CTPS')->unique();
            $table->integer('ocupacao_id')->unsigned();
            $table->foreign('ocupacao_id')->references('id')->on('ocupacaos')->onDelete('cascade');
            $table->date('admissao');
            $table->date('desligamento');
            $table->string('foto', 100);            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
