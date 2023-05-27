<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $location = [
            ['logitude' => -122.419416, 'latitude' => 37.774929],
            ['logitude' => -177.161087, 'latitude' => 32.715736],
            ['logitude' => -75.16465387, 'latitude' => 36.546534],
            ['logitude' => -79.43546346, 'latitude' => 37.547576],
            ['logitude' => -80.3646547643, 'latitude' => 38.43646],
        ];
        Location::insert($location);
    }
}
