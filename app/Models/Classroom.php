<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classroom extends Model
{
    // الأعمدة المسموح بتعبئتها تلقائياً
    protected $fillable = ['professor_name', 'name', 'specialization', 'year'];

    // علاقة (متعدد إلى متعدد): الصف يحتوي على العديد من الطلاب
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }

    // علاقة (واحد إلى متعدد): الصف يحتوي على العديد من العلامات
    public function grades(): HasMany
    {
        return $this->hasMany(Grade::class);
    }

    // علاقة (واحد إلى متعدد): الصف يحتوي على سجل حركات خاص به
    public function logs(): HasMany
    {
        return $this->hasMany(ClassLog::class);
    }
}
