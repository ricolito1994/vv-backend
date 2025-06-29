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
        //pivot
        Schema::create('booked_ad_ons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bookind_ad_on_id')->constrained('booking_ad_ons')->onDelete('cascade');
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');
            $table->foreignId('removed_by')->nullable()->constrained('guests')->onDelete('cascade');
            $table->foreignId('deleted_by')->nullable()->constrained('guests')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_ad_ons');
    }
};
