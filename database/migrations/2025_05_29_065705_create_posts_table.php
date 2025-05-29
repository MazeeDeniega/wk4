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
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->comment('Primary key: post ID');
            $table->string('title')->comment('Post title');
            $table->text('content')->comment('Full content of the post');
            $table->string('slug')->comment('URL-friendly slug for the post');
            $table->timestamp('publication_date')->nullable()->comment('Timestamp when post was published');
            $table->timestamp('last_modified_date')->nullable()->comment('Timestamp of the last modification');
            $table->string('status')->comment('Post status: D = Draft, P = Published, I = Inactive');
            $table->string('featured_image_url')->comment('URL of the featured image');
            $table->integer('views_count')->default(0)->comment('Number of views, default is 0');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
