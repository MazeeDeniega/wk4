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
            $table->string('file_name')->comment('Name of the uploaded file');
            $table->string('file_type')->comment('MIME type or extension of the file');
            $table->integer('file_size')->nullable()->comment('Size of the file in bytes (nullable)');
            $table->string('url')->comment('Public URL to access the file');
            $table->timestamp('upload_date')->comment('Timestamp of when the file was uploaded');
            $table->string('description')->comment('Description or caption of the media file');
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
