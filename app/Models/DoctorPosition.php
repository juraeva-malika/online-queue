<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorPosition extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id',
        'position_id',
    ];
    public $timestamps = false;
}
