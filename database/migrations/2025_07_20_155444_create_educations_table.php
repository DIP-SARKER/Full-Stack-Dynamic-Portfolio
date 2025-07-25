<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('type');
            $table->string('name');
            $table->string('institute');
            $table->year('enrolled_year');
            $table->year('passing_year');
            $table->string('grade');
            $table->timestamps();
        });
        
        Schema::table('educations', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('educations');
    }
};

