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
            $table->string('dni_S')->unique();
            $table->string('name_S');
            $table->string('last_name_S');
            $table->string('middle_name_S');
            $table->string('slug_name_S');
            $table->string('phone_S');
            $table->string('address_S');
            $table->string('school_S');

            $table->foreignId('guardian_id')
                ->constrained()
                ->onDelete('cascade');

            $table->timestamps();
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
