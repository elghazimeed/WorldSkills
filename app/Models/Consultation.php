<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'NumeroConsultation',
        'patient_id',
        'TypeConsultation',
        'Objet',
        'Observation',
        'Date',
    ];


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function staff()
    {
        return $this->belongsToMany(User::class, 'consultation_staff', 'consultation_id', 'user_id');
    }
}
