<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(): void{
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('duration');
            $table->text('lyrics');
            $table->string('video_url')->nullable();
            $table->string('audio_url')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('genre_id')->nullable();
            $table->foreign('genre_id')
            ->references('id')
            ->on('genres')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('band_id');
            $table->foreign('band_id')
            ->references('id')
            ->on('bands')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    public function down(): void{
        Schema::dropIfExists('songs');
    }
};
