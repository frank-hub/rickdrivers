<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRental extends Model
{
    use HasFactory;

    protected $fillable = [
        'status','plate','make','model','year','sitter','location','image_name','exp_price',
        'rental_price','transmission','displacement'
    ];
}
