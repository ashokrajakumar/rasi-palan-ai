<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('horoscope_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->date('dob');
            $table->string('rasi', 50);
            $table->longText('horoscope');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('horoscope_requests');
    }
};