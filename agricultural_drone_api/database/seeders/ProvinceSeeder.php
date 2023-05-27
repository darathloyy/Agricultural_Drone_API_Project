<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $provinces = [
            ['name' => 'Kampong Chhnang'],
            ['name' => 'Kampong Cham'],
            ['name' => 'Kampong Thom'],
            ['name' => 'Siem Reap'],
            ['name' => 'BattamBang'],
        ];
        Province::insert($provinces);
    }
}
