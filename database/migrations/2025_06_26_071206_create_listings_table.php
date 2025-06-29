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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('listing_name', 255);
            $table->longText('listing_description')->nullable();
            $table->integer('listing_pax_adult')->nullable();
            $table->integer('listing_pax_children')->nullable();
            $table->integer('listing_total_pax')->nullable();
            $table->float('listing_price', 8, 2)->nullable();
            $table->float('listing_rating', 8, 2)->default(0.0);
            $table->boolean('listing_is_available')->default(true)->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
