<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku',125);
            $table->foreignId('kategori_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('penerbit_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('pengarang',125);
            $table->string('tahun_terbit',4)->nullable();
            $table->string('isbn',50)->nullable();
            $table->string('j_buku_baik',5)->nullable();
            $table->string('j_buku_rusak',5)->nullable();
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
        Schema::dropIfExists('bukus');
    }
}
