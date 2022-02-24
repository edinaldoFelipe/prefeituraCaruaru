<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalSchedules extends Model
{
    use HasFactory;

    public function collaborator()
    {
        return $this->hasOne(Collaborators::class, 'id', 'collaborator_id');
    }

    public function healt_hunit()
    {
        return $this->hasOne(HealthUnits::class, 'id', 'health_unit_id');
    }
}
