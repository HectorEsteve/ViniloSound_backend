<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void{
        Schema::create('band_vinyl', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('band_id');
            $table->unsignedBigInteger('vinyl_id');
            $table->timestamps();

            $table->foreign('band_id')
                ->references('id')
                ->on('bands')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('vinyl_id')
                ->references('id')
                ->on('vinyls')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unique(['band_id', 'vinyl_id']);
        });
    }

    public function down(): void{
        Schema::dropIfExists('band_vinyl');
    }
};
