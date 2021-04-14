<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('produks_id');
            $table->integer('jumlah');
            $table->string('harga_total');
            $table->string('dibayar');
            $table->string('kembalian');
            $table->unsignedBigInteger('members_id');
            $table->integer('diskon');
            $table->unsignedBigInteger('cashiers_id');
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
        Schema::dropIfExists('transaksis');
    }
}
