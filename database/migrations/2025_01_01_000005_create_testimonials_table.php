<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('auteur');
            $table->string('role')->nullable();
            $table->string('societe')->nullable();
            $table->unsignedTinyInteger('note')->default(5);
            $table->text('message');
            $table->unsignedInteger('ordre')->default(0);
            $table->boolean('actif')->default(true);
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('testimonials');
    }
};