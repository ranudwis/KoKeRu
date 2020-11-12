<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelBukti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_laporan');
            $table->string('bukti');
            $table->timestamps();

            $table->foreign('id_laporan')
                ->references('id')->on('laporan')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukti');
    }
}
