<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

class VehicleSeeder extends Seeder
{
    public function run(): void
    {
        $csvPath = database_path('seeders/data/Vehicles.csv');

        // Load CSV and use first row as header
        $csv = Reader::createFromPath($csvPath, 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv->getRecords() as $record) {
            DB::table('vehicles')->insert([
                'register_status'   => $record['register_status'] ?? $record['REGISTER_STATUS'] ?? null,
                'condition'         => $record['CONDITION'] ?? null,
                'make'              => $record['MAKE'] ?? null,
                'model'             => $record['MODEL'] ?? null,
                'trim_or_edition'   => $record['TRIM / EDITION (OPTIONAL)'] ?? null,
                'manufactured_year' => $record['MANU. YEAR'] ?? null,
                'registered_year'   => $record['REG. YEAR'] ?? null,
                'mileage'           => $record['MILEAGE (KM)'] ?? 0,
                'engine_capacity'   => $record['ENGINE CAPACITY (CC)'] ?? null,
                'fuel_type'         => $record['FUEL TYPE'] ?? null,
                'transmission'      => $record['TRANSMISSION'] ?? null,
                'body'         => $record['BODY TYPE'] ?? null,
                'description'       => $record['DESCRIPTION'] ?? 'No description available.',

                // Fields in table but not in CSV (add defaults)
                'exterior_color'    => $record['EXTERIOR COLOR'] ?? 'White',
                'interior_color'    => $record['INTERIOR COLOR'] ?? 'Black',
                // CSV header sometimes uses `Price`, `PRICE` or `price` — fallback to any of them.
                'price'             => $record['PRICE'] ?? $record['Price'] ?? $record['price'] ?? 0,
                'main_image'        => $record['MAIN IMAGE'] ?? '1753549123_04.jpg',
                'image_2'           => $record['IMAGE 2'] ?? null,
                'image_3'           => $record['IMAGE 3'] ?? null,
                'image_4'           => $record['IMAGE 4'] ?? null,
                'image_5'           => $record['IMAGE 5'] ?? null,

                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}
