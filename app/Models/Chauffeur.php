<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'phone',
        'license_no',
        'identification',
        'passport',
        'location',
        'license',
        'price',
        'availability',

    ];
}
