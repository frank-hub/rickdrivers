<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_id',
        'p_location',
        'drop_location',
        'date_time',
        'add_features',
        'driver_info',
        'contact',
        'pay_method',
        'terms'
    ];
}
