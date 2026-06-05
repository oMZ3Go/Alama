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
        Schema::create('classroom_student', function (Blueprint $table) {
            $table->id();
            // ربط منطقي بالصف، وفي حال حذف الصف تحذف العلاقة تلقائياً
            $table->foreignId('classroom_id')->constrained()->cascadeOnDelete();
            // ربط منطقي بالطالب، وفي حال حذف الطالب تحذف العلاقة تلقائياً
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classroom_student');
    }
};
