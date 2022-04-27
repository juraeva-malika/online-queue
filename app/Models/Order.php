<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const WAITING = "waiting";
    const APPROVED = "approved";
    const CANCELED = "canceled";
    protected $fillable = [
        'id',
        'doctor_id',
        'service_id',
        'date',
        'time', 
        'details',
        "fullname",
        "phone",
        "status",
    ];
    protected $dates = ['date', ];
    protected $casts = [
        'date'  => 'date:m/d/Y',
        
    ];
    public $timestamps = false;

    public function service(){
        return $this->belongsTo(Service::class,"service_id");
    }
    public function doctor(){
        return $this->belongsTo(Doctor::class,"doctor_id");
    }
}
