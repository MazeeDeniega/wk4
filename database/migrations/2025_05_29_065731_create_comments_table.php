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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment_content')->comment('The actual comment content');
            $table->timestamp('comment_date')->comment('Date and time the comment was posted');
            $table->string('reviewer_name')->comment('Name of the person who made the comment');
            $table->string('reviewer_email')->comment('Email address of the commenter');
            $table->boolean('is_hidden')->default(false)->comment('Whether the comment is hidden from public view');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
