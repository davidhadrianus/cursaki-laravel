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
        Schema::create('studants', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable()->unique();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('nif')->unique();
            $table->text('description')->nullable();
            $table->string('gender')->nullable();
            $table->boolean('is_active')->default(true);
            $table->dateTime('joined_at')->nullable();
            $table->dateTime('left_at')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studants');
    }
};
