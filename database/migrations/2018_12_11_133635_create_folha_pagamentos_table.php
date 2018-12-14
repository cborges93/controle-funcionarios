<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFolhaPagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folha_pagamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('funcionario_id')->unsigned();
            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('cascade');
            $table->integer('horas_trabalhadas');
            $table->integer('horas_extras');
            $table->double('bruto', 10,2);
            $table->double('INSS', 10,2);
            $table->double('imposto_renda', 10,2)->default('0.0');
            $table->double('liquido', 10,2);
            $table->string('mes_ano')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folha_pagamentos');
    }
}
