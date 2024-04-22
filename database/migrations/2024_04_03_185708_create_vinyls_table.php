<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(): void{
        Schema::create('vinyls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover_url')->nullable();
            $table->integer('publication_year');
            $table->integer('edition_year');
            $table->timestamps();

            $table->unsignedBigInteger('format_id')
                ->nullable();
            $table->foreign('format_id')
                ->references('id')
                ->on('formats')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('record_company_id')
                ->nullable();
            $table->foreign('record_company_id')
                ->references('id')
                ->on('record_companies')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    public function down(): void{
        Schema::dropIfExists('vinyls');
    }
};
