<?php

namespace Database\Seeders;

use App\Models\Type_drone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeDroneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $type_drone=[
            ['name'=>'Harvesting'],
            ['name'=>'Spraying'],
            ['name'=>'Mapping'],
            ['name'=>'Sensing'],
           
        ];
        Type_drone::insert($type_drone);
    }
}
