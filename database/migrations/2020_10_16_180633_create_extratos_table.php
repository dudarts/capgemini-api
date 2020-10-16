<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extratos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("usuarioId")->nullable(false);
            $table->unsignedInteger("contaId")->nullable(false);
            $table->decimal("valor");
            $table->timestamps();
            $table->foreign("usuarioId")->references("id")->on("usuarios");
            $table->foreign("contaId")->references("id")->on("contas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extratos');
    }
}
