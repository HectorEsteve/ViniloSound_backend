<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up():void{
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('number_vinyls')->default(0);
            $table->integer('rating')->default(0);
            $table->boolean('public')->default(true);

            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down():void{
        Schema::dropIfExists('collections');
    }
};

