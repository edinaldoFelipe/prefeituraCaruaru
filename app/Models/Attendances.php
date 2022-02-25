<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Attendances extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'collaborator_id',
        'patient_id',
        'health_unit_id',
        'certificate',
        'orientation',
        'date_return',
    ];

    /**
     * Include data from outher tables by foreign key
     *
     * @return Model
     */
    public function collaborator()
    {
        return $this->hasOne(Collaborators::class, 'id', 'collaborator_id');
    }

    /**
     * Include data from outher tables by foreign key
     *
     * @return Model
     */
    public function patient()
    {
        return $this->hasOne(Patients::class, 'id', 'patient_id');
    }

    /**
     * Include data from outher tables by foreign key
     *
     * @return Model
     */    
    public function health_unit()
    {
        return $this->hasOne(HealthUnits::class, 'id', 'health_unit_id');
    }

    /**
     * Include data from outher tables by foreign key
     *
     * @return Model
     */
    public function drugs()
    {
        return $this->hasMany(AttendancesDrugs::class, 'attendance_id', 'id');
    }

    /**
     * Include data from outher tables by foreign key
     *
     * @return Model
     */
    public function symptoms()
    {
        return $this->hasMany(AttendancesSymptoms::class, 'attendance_id', 'id');
    }
}
