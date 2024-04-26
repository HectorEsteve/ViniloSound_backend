<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(): void{
        Schema::create('record_companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('logo_url')->nullable();
            $table->boolean('active')->default(true);
            $table->string('website_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('record_companies');
    }
};
