<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom; // استدعاء نموذج الصفوف للتعامل مع قاعدة البيانات

class ClassroomController extends Controller
{
    // 1. دالة لعرض صفحة (واجهة) إنشاء صف جديد
    public function create()
    {
        // سنقوم بإنشاء ملف الواجهة هذا في الخطوة القادمة
        return view('classrooms.create');
    }

    // 2. دالة لاستقبال بيانات الأستاذ من الواجهة وحفظها
    public function store(Request $request)
    {
        // أولاً: التحقق من صحة البيانات (Validation) لضمان عدم إدخال بيانات فارغة للأساسيات
        $validatedData = $request->validate([
            'professor_name' => 'required|string|max:255',
            'name'           => 'required|string|max:255',
            'specialization' => 'nullable|string|max:255',
            'year'           => 'nullable|string|max:255',
        ]);

        // ثانياً: حفظ البيانات الموثوقة كصف جديد في قاعدة البيانات
        Classroom::create($validatedData);

        // ثالثاً: إعادة توجيه الأستاذ لنفس الصفحة مع رسالة نجاح
        return redirect()->back()->with('success', 'تم إنشاء الصف الدراسي بنجاح! يمكنك الآن إضافة صف آخر أو البدء بإضافة الطلاب.');
    }
}
