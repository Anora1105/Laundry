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
            $table->id();
            $table->string('namacustomer');
            $table->enum('jenislaundry', ['Badcover', 'Baju', 'Karpet']);
            $table->enum('paket', ['Bronze', 'Silver', 'Gold']);
            $table->bigInteger('berat');
            $table->enum('status', ['proses', 'selesai']);
            $table->string('outlet');
             $table->bigInteger('totalbayar');
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
