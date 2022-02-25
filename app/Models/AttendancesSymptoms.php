<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendancesSymptoms extends Model
{
    use HasFactory;

    /**
     * Include data from outher tables by foreign key
     *
     * @return Model
     */
    public function attendance()
    {
        return $this->belongsTo(Attendances::class);
    }
}
