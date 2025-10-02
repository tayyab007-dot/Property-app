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
       Schema::create('agents', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->string('agency_name')->nullable();
    $table->string('license_no')->nullable();
    $table->string('phone_number')->nullable();
    $table->string('email')->nullable();   // 👈 added
    $table->string('address')->nullable(); // 👈 added
    $table->string('profile_image')->nullable();
    $table->boolean('is_verified')->default(false);
    $table->text('bio')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};







// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::table('properties', function (Blueprint $table) {
//             // Add agent_id as foreign key
//             $table->foreignId('agent_id')->after('id')->constrained()->onDelete('cascade');
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::table('properties', function (Blueprint $table) {
//             $table->dropForeign(['agent_id']);
//             $table->dropColumn('agent_id');
//         });
//     }
// };