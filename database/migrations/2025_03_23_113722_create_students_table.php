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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 256);
            $table->date('dob');
            $table->string('image' , 512)->nullable();
            $table->string('email' , 112);
            $table->string('phone', 12);
            $table->string('address' ,256 );
            $table->string('city' ,56 );
            $table->enum('gender', ['male', 'female', 'other']);
            $table->enum('status', ['pending', 'accept', 'reject'])->default('pending');
            $table->unsignedBigInteger('roll_id');

            $table->timestamps();
            $table->foreign('roll_id')->references('id')->on('roll_numbers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
