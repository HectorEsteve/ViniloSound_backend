<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(): void{
        Schema::create('collection_vinyl', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('collection_id');
            $table->unsignedBigInteger('vinyl_id');
            $table->timestamps();

            $table->foreign('collection_id')
                ->references('id')
                ->on('collections')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('vinyl_id')
                ->references('id')
                ->on('vinyls')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->unique(['collection_id', 'vinyl_id']);
        });
    }

    public function down(): void{
        Schema::dropIfExists('collection_vinyl');
    }
};
