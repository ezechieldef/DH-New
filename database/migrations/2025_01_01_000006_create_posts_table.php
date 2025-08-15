<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('excerpt', 300)->nullable();
            $table->longText('contenu')->nullable();
            $table->timestamp('publie_at')->nullable()->index();
            $table->enum('status', ['brouillon','publie'])->default('brouillon');
            $table->timestamps();
            $table->index(['status','publie_at']);
        });
    }
    public function down(): void {
        Schema::dropIfExists('posts');
    }
};