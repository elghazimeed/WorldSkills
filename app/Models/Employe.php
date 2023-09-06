<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = ['typeEmploi']; // Add relevant fillable fields for Employe

    public function user()
    {
        return $this->morphOne(User::class, 'profileable');
    }

}
