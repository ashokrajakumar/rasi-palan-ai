<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('compatibility_requests', function (Blueprint $table) {
            $table->id();

            $table->string('person_one_rasi');
            $table->string('person_two_rasi');

            $table->string('compatibility_type'); // love or marriage
            $table->string('language')->default('ta');

            $table->longText('result');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('compatibility_requests');
    }
};
