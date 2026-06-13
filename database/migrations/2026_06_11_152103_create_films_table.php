<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id(); // Ini akan menjadi referensi untuk foreign key di watchlists
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->string('genre')->nullable();
            $table->string('durasi')->nullable();
            $table->string('rating_umur')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('sutradara')->nullable();
            $table->text('sinopsis')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('films');
    }
};