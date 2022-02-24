<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Attendances extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'collaborator_id',
        'patient_id',
        'health_unit_id',
        'certificate',
        'orientation',
        'date_return',
    ];

    public function collaborator()
    {
        return $this->hasOne(Collaborators::class, 'id', 'collaborator_id');
    }

    public function patient()
    {
        return $this->hasOne(Patients::class, 'id', 'patient_id');
    }

    public function health_unit()
    {
        return $this->hasOne(HealthUnits::class, 'id', 'health_unit_id');
    }

    public function drugs()
    {
        return $this->hasMany(AttendancesDrugs::class, 'attendance_id', 'id');
    }

    public function symptoms()
    {
        return $this->hasMany(AttendancesSymptoms::class, 'attendance_id', 'id');
    }
}
