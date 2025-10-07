<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->id(); // int, primary key, auto-increment
            
            $table->string('name');
            $table->string('email')->unique(); // unique
            $table->text('bio')->nullable();
            
            // Foreign Key
            $table->foreignId('event_id')->constrained('events')->cascadeOnDelete();
            
            $table->boolean('approved')->default(false);
            
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('speakers');
    }
};
