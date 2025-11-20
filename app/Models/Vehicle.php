<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

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



    protected static function booted()
    {
        static::saved(function ($vehicle) {
            // Clear cached min/max and gallery/featured lists
            Cache::forget('vehicles.min_price');
            Cache::forget('vehicles.max_price');
            Cache::forget('vehicles.gallery');
            // Clear current year featured and vehicle's manufactured year featured
            Cache::forget('vehicles.featured.' . Carbon::now()->year);
            if ($vehicle->manufactured_year) {
                Cache::forget('vehicles.featured.' . $vehicle->manufactured_year);
            }
        });

        static::deleted(function ($vehicle) {
            Cache::forget('vehicles.min_price');
            Cache::forget('vehicles.max_price');
            Cache::forget('vehicles.gallery');
            Cache::forget('vehicles.featured.' . Carbon::now()->year);
            if ($vehicle->manufactured_year) {
                Cache::forget('vehicles.featured.' . $vehicle->manufactured_year);
            }
        });
    }

}
