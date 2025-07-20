<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('type'); // SSC, HSC, BSc, MSc, etc.
            $table->string('name');
            $table->string('institute');
            $table->year('enrolled_year');
            $table->year('passing_year');
            $table->string('grade');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('educations');
    }
};

