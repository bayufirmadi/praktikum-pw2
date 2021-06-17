<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 150);
            $table->string('isbh', 150);
            $table->unsignedBigInteger('penulis_id');
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('penulis')->references('id')->on('penulis');
            $table->foreign('kategori')->references('id')->on('kategori');

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
        Schema::dropIfExists('_buku');
    }
}
