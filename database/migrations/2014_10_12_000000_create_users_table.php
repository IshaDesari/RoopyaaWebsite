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
            $table->bigIncrements('id');

            $table->string('fullname', 100);
            $table->string('email', 100)->unique();
            $table->string('phone', 15)->nullable();

            $table->string('pwd', 100)->nullable();
            $table->string('password', 100)->nullable();
            $table->string('otp')->nullable();

            $table->text('profilepicture')->nullable();

            $table->boolean('status')->default(1);

            $table->timestamp('email_verified_at')->nullable();

            $table->rememberToken();

            $table->timestamps();
            $table->softDeletes();
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
