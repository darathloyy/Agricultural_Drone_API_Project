<?php

namespace Database\Seeders;

use App\Models\Map;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $maps = [
            ['name' => 'Map of City', 'image' => 'http://example.com/city_map.jpg', 'farm_id' => 7, 'drone_id' => 1],
            ['name' => 'Island Map', 'image' => 'http://example.com/island_map.jpg', 'farm_id' => 2, 'drone_id' => 1],
            ['name' => 'Topographic', 'image' => 'http://example.com/topgraphic_map.jpg', 'farm_id' => 7, 'drone_id' => 1],
            ['name' => 'Historical', 'image' => 'http://example.com/historical_map.jpg', 'farm_id' => 2, 'drone_id' => 1],
            ['name' => 'Weather', 'image' => 'http://example.com/weather_map.jpg', 'farm_id' => 7, 'drone_id' => 1],
        ];
        Map::insert($maps);
    }
}
