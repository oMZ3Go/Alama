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
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->string('professor_name'); // اسم الأستاذ ليظهر عند الطباعة
            $table->string('name'); // اسم الصف أو المادة
            $table->string('specialization')->nullable(); // التخصص
            $table->string('year')->nullable(); // السنة الدراسية
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classrooms');
    }
};
