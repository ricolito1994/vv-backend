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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('guest_fullname');
            $table->string('guest_firstname');
            $table->string('guest_lastname');
            $table->string('guest_source_ip_address')->nullable();
            $table->string('guest_location')->nullable();
            $table->string('guest_location_lat')->nullable();
            $table->string('guest_location_lng')->nullable();
            $table->integer('guest_age')->nullable();
            $table->string('guest_email');
            $table->string('guest_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
