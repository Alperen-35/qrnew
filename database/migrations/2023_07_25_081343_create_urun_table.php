<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('urunler', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('slug')->uniqid();
        $table->text('desc');
        $table->integer('price');
        $table->string('img');
        $table->integer('cate');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urunler1');
    }
};
