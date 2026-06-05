<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;

// الرابط الرئيسي للتطبيق (يمكننا لاحقاً جعله يوجه الأستاذ للوحة تحكم)
Route::get('/', function () {
    return redirect('/classrooms/create');
});

// مسار عرض صفحة "إنشاء صف جديد"
Route::get('/classrooms/create', [ClassroomController::class, 'create'])->name('classrooms.create');

// مسار استقبال البيانات وحفظها (يعمل عند ضغط الأستاذ على زر الحفظ)
Route::post('/classrooms', [ClassroomController::class, 'store'])->name('classrooms.store');
