<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    protected $fillable = ['university_id', 'full_name', 'extra_info'];

    // تحويل حقل الـ JSON إلى مصفوفة برمجية تلقائياً عند استدعائه
    protected $casts = [
        'extra_info' => 'array',
    ];

    // علاقة (متعدد إلى متعدد): الطالب يمكن أن ينتمي لأكثر من صف (ميزة نسخ الطلاب)
    public function classrooms(): BelongsToMany
    {
        return $this->belongsToMany(Classroom::class);
    }

    // علاقة (واحد إلى متعدد): الطالب لديه سجل علامات
    public function grades(): HasMany
    {
        return $this->hasMany(Grade::class);
    }
}
