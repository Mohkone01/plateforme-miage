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
        Schema::create('student_cvs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('new_users')->onDelete('cascade');
            $table->string('file_name');
            $table->string('file_path');
            $table->string('file_size'); // in KB
            $table->string('file_type'); // pdf, doc, docx
            $table->text('description')->nullable();
            $table->integer('download_count')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_cvs');
    }
};
