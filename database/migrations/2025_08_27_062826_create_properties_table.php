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
        Schema::create('properties', function (Blueprint $table) {
           $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Agent/Owner
     $table->foreignId('agent_id')->constrained()->onDelete('cascade'); // <-- ADD THIS LINE
    $table->string('title');
    $table->text('description');
    $table->decimal('price', 12, 2);
    $table->enum('type', ['sale', 'rent']);
    $table->string('property_type'); // house, plot, apartment, etc.
    $table->integer('bedrooms')->nullable();
    $table->integer('bathrooms')->nullable();
    $table->float('area')->nullable();
    $table->string('address');
    $table->decimal('latitude', 10, 7)->nullable();
    $table->decimal('longitude', 10, 7)->nullable();
    $table->enum('status', ['draft', 'published'])->default('draft');
    $table->timestamp('published_at')->nullable();
    $table->json('amenities')->nullable(); // <-- Add this line
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
