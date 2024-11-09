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
        Schema::create('coursedetails', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Duration');
            $table->string('fee_details');
            $table->date('thampanoor_tvm');
            $table->date('technopark_tvm');
            $table->date('Kochi');
            $table->date('Nagercoil');
            $table->date('Online');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coursedetails');
    }
};
