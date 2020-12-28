<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->date('data');
            $table->string('hora');
            $table->string('local');
            $table->string('endereco');
            $table->string('complemento');
            $table->integer('numero');
            $table->unsignedBigInteger('processos_id');
            $table->timestamps();
        });

        Schema::table('agendas', function (Blueprint $table) {
            $table->foreign('processos_id')->references('id')->on('processos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
