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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string("booking_title")->nullable();
            $table->text("booking_description")->nullable();
            $table->date('booking_checkin_date');
            $table->time('booking_checkin_time')->nullable();
            $table->date('booking_checkout_date');
            $table->time('booking_checkout_time')->nullable();
            $table->time('booking_number_of_adults')->default(0)->nullable();
            $table->time('booking_number_of_children')->default(0)->nullable();
            $table->boolean('is_cancelled')->default(false)->nullable();
            $table->boolean('is_booking_paid')->default(false)->nullable();
            $table->foreignId('booked_by')->constrained('guests')->onDelete('cascade');
            $table->foreignId('cancelled_by')->nullable()->constrained('guests')->onDelete('cascade');
            $table->foreignId('deleted_by')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('cascade');
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
