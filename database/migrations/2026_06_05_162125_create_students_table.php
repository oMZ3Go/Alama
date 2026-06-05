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
            $table->string('university_id')->unique()->nullable(); // الرقم الجامعي أو المدرسي (اختياري)
            $table->string('full_name'); // الاسم الكامل للطالب
            $table->json('extra_info')->nullable(); // حقل JSON مفرغ للأعمدة الديناميكية المستقبلية
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
