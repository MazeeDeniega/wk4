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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->comment('User email address (must be unique)');
            $table->string('password')->comment('User password (hashed)');
            $table->string('name')->comment('Full name of the user');
            $table->string('remember_token')->nullable()->comment('Token used for remember-me sessions');
            $table->timestamp('email_verified_at')->nullable()->comment('Timestamp for when the email was verified');
            $table->timestamp('registration_date')->useCurrent()->comment('Timestamp when the user registered');
            $table->timestamp('last_login_date')->nullable()->comment('Timestamp of the user\'s last login');
            $table->timestamps();
        });


    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
