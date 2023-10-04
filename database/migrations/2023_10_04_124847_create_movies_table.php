<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string("title", 100);
            $table->integer("year");
            $table->json("cast")->nullable();
            $table->json("genres");
            $table->text("extract")->nullable();
            $table->string("thumbnail", 400);
            $table->softDeletes(); // aggiungo la colonna per il softdeletes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
