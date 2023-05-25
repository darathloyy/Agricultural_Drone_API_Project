<?php

namespace Database\Seeders;

use App\Models\Farm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $farms=[
            ['name'=>'Farm A','user_id'=>1,'province_id'=>2],
            ['name'=>'Farm B','user_id'=>2,'province_id'=>1],
            ['name'=>'Farm C','user_id'=>1,'province_id'=>1],
            ['name'=>'Farm D','user_id'=>3,'province_id'=>2],
            ['name'=>'Farm E','user_id'=>2,'province_id'=>1],
        ];
        Farm::insert($farms);
    }
}
