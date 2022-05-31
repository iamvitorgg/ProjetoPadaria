<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_pag');

            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');     

            $table->unsignedBigInteger('id_produtos');
            $table->foreign('id_produtos')->references('id')->on('produtos'); 
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
        Schema::dropIfExists('pagamentos');
    }
};
