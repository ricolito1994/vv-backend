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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('media_description')->nullable();
            $table->unsignedBigInteger('media_id');
            $table->string('media_url');
            $table->string('media_origin_table_type');
            $table->string('media_file_type');
            $table->string('media_file_size')->nullable();;
            $table->longText('media_file_other_data')->nullable();;
            $table->foreignId('uploaded_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('deleted_by')->constrained('users')->onDelete('cascade');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
