<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    protected $fillable = ['classroom_id', 'student_id', 'title', 'score'];

    // العلامة تنتمي إلى صف محدد
    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    // العلامة تنتمي إلى طالب محدد
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
