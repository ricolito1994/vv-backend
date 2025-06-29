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
        // pivot table
        Schema::create('booked_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booked_listing')->constrained('listings')->onDelete('cascade');
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');
            $table->foreignId('added_by')->nullable()->constrained('guests')->onDelete('cascade');
            $table->foreignId('removed_by')->nullable()->constrained('guests')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_listings');
    }
};
