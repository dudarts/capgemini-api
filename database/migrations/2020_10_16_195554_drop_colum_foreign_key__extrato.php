<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumForeignKeyExtrato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('extratos');
        Schema::create('extratos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("contaId")->nullable(false);
            $table->decimal("valor");
            $table->timestamps();
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
