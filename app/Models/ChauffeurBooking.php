<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChauffeurBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'p_location',
        'destination',
        'vehicle_type',
        'date_time',
        'no_pass',
        'contact',
        'payment_method',
        's_instructions',
        'chauffer_id'

    ];
}
