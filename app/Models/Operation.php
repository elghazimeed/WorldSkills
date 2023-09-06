<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'NumeroConsultation',
        'patient_id',
        'TypeConsultation',
        'Objet',
        'Observation',
        'Date',
        'BlocOperatoire',
        'DateDebut',
        'DateFin',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function staff()
    {
        return $this->belongsToMany(User::class, 'operation_staff', 'operation_id', 'user_id');
    }
}
