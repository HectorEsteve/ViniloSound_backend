<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(): void{
        Schema::create('bands', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('members_count');
            $table->text('members')->nullable();
            $table->string('formation_year', 4);
            $table->string('country');
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('bands');
    }
};
