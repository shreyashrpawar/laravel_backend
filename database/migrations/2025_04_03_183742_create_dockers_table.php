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
        Schema::create('dockers', function (Blueprint $table) {
            $table->string('id')->primary(); // Using string as primary key
            $table->string('semester');
            $table->string('subject');
            $table->text('pullCommand');
            $table->text('runCommand');
            $table->text('instructions');
            $table->text('notes')->nullable(); // Nullable in case notes are optional
            $table->timestamps(); // Adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dockers', function (Blueprint $table) {
            Schema::dropIfExists('dockers');
        });
    }
};
