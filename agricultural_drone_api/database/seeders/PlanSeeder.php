<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $plans = [
            ['name' => 'order66', 'type' => 'Wheat', 'date' => '2023-06-01', 'time' => '08:00:00', 'area' => '100 ha', 'density' => '2L/ha'],
            ['name' => 'order55', 'type' => 'Soybeans', 'date' => '2023-06-02', 'time' => ' 10:30:00', 'area' => '75 ha', 'density' => '1.5L/ha'],
            ['name' => 'order77', 'type' => 'Corn', 'date' => '2023-06-03', 'time' => ' 14:15:00', 'area' => '120 ha', 'density' => '2.3L/ha'],
            ['name' => 'order88', 'type' => 'Cotton', 'date' => '2023-06-04', 'time' => ' 12:45:00', 'area' => '90 ha', 'density' => '1.8L/ha'],
            ['name' => 'oder99', 'type' => 'Wheat', 'date' => '2023-06-05', 'time' => ' 09:20:00', 'area' => '80 ha', 'density' => '1.2L/ha'],

        ];
        Plan::insert($plans);
    }
}
