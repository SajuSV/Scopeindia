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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('secondname');
            $table->enum('gender',['male','female','other']);
            $table->date('dateofbirth');
            $table->string('email');
            $table->string('mobilenumber');
            $table->text('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('hobbies');
            $table->string('image');
            $table->string('otp')->nullable();
            $table->string('password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
