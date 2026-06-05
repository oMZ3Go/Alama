<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassLog extends Model
{
    protected $fillable = ['classroom_id', 'action', 'description'];

    // السجل ينتمي لصف محدد
    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }
}
