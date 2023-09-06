<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infirmier extends Model
{
    use HasFactory;
    protected $fillable = ['department_id'];

    public function user()
    {
        return $this->morphOne(User::class, 'profile');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

}
