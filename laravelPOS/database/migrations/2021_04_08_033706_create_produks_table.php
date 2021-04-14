<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nama');
            $table->integer('uid')->unique();
            $table->integer('harga beli');
            $table->integer('harga jual');
            $table->unsignedBigInteger('kategoris_id');
            $table->string('merek');
            $table->integer('stok');
            $table->integer('diskon');
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
        Schema::dropIfExists('produks');
    }
}
