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
        Schema::create('_administrators', function (Blueprint $table) {
            // $table->id();
            $table->string('id_karyawan',50);
            $table->string('nama_karyawan');
            $table->date('tm');
            $table->string('jk');
            $table->text('alamat');
            $table->string('nohp',13);
            $table->string('jabatan',80);
            $table->text('foto');
            $table->primary('id_karyawan');
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
        Schema::dropIfExists('_administrators');
    }
};
