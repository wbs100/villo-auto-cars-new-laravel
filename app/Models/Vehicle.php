<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = "vehicles";

    protected $fillable = [
        'model',
        'description',
        'manufactured_year',
        'make',
        'body',
        'exterior_color',
        'interior_color',
        'mileage',
        'transmission',
        'condition',
        'price',
        'main_image',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'registered_year',
        'register_status',
        'trim_or_edition',
        'engine_capacity',
        'fuel_type',
    ];

    // Ensure fuel_type is cast correctly if you are not using MySQL's enum directly
    protected $casts = [
        'mileage' => 'decimal:2',
        'price' => 'decimal:2',
    ];
}
