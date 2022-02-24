<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendancesSymptoms extends Model
{
    use HasFactory;

    public function attendance()
    {
        return $this->belongsTo(Attendances::class);
    }
}
