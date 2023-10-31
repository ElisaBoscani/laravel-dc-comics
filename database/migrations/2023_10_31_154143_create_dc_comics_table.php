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
        Schema::create('dc_comics', function (Blueprint $comic) {
            $comic->id();

            $comic->string("title", 100)->nullable();
            $comic->text("description")->nullable();
            $comic->text('thumb')->nullable();
            $comic->string('price', 10)->nullable();
            $comic->string('series', 50)->nullable();
            $comic->date('sale_date')->nullable();
            $comic->string('type', 50)->nullable();
            $comic->string('artists')->nullable();
            $comic->string('writers')->nullable();
            $comic->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dc_comics');
    }
};
