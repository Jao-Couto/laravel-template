<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaTarefa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
          "tarefas",
          function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->string("descricao")->nullable();
            $table->boolean("concluido")->default(false);
            $table->timestamps();
          }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
