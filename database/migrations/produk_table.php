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
        Schema::create('tabel_produk', function (Blueprint $table) {
            $table->id();
            $table->string('produk');
            $table->unsignedBigInteger('kategori_id');        
            $table->string('stok');
            $table->foreign('kategori_id')->references('id')->on('tabel_kategori');
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
        Schema::dropIfExists('tabel_produk');
    }
};
