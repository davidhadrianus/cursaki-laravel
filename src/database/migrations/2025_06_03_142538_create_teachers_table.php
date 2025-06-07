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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable()->unique();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('nif')->unique();
            $table->text('description')->nullable();
            $table->string('type')->default('INDIVIDUAL');
            $table->string('gender')->nullable();
            $table->boolean('is_active')->default(true);
            $table->foreignId('user_id')->constrained()->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('institution_teacher', function (Blueprint $table) {
            $table->id();
            $table->foreignId('institution_id')->constrained();
            $table->foreignId('teacher_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('institution_teacher');
    }
};
