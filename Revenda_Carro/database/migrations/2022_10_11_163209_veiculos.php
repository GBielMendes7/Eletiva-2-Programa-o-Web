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
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->string('marca',100);
            $table->string('modelo',100);
            $table->string('cor',100);
            $table->string('anof',100);
            $table->string('anom',100);
            $table->string('combustivel',100);
            $table->string('preco',100);
            $table->text('detalhes');
            $table->string('foto');
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
        Schema::dropIfExists('veiculos');
    }
};
