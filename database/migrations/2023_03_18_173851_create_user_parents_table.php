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
        Schema::create('user_parents', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("password");
            $table->string("location");
            $table->string("email");
            $table->string("contactNumber");
            $table->string("city");
            $table->string("parentImage");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_parents');
    }
};
