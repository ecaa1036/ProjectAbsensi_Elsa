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
        Schema::create('_absensi', function (Blueprint $table) {
            $table->id();
            // $table->text('foto');
            // $table->string('nik',20);
            $table->string('nama');
            $table->date('tanggal');
            $table->time('pukul');
            $table->string('keterangan');
            // $table->primary('nik');
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
        Schema::dropIfExists('_absensi');
    }
};
