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
        Schema::create('peminjamanms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('status_peminjam');
            $table->string('nama_barang');
            $table->date('mintgl_pinjam');
            $table->date('maxtgl_pinjam');
            $table->string('jumlah_pinjam');
            $table->string('alasan');
            $table->string('disposisi')->nullable();
            $table->string('approval')->nullable();
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
        //
    }
};
