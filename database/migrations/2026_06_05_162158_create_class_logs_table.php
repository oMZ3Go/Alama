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
        Schema::create('class_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classroom_id')->constrained()->cascadeOnDelete();
            $table->string('action'); // نوع الحركة (مثال: إضافة علامة، حذف طالب)
            $table->text('description'); // تفصيل الحركة (تم تعديل علامة الطالب X من 10 إلى 15)
            $table->timestamps(); // الحقل created_at هنا يمثل وقت الحدوث بدقة
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_logs');
    }
};
