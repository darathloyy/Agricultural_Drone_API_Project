<?php

namespace Database\Seeders;

use App\Models\Drone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DroneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $drones=[
            ['model'=>'DJL Mavic Pro','manufacturer'=>'DJL','payload'=>'0.5 kg','price'=>999,'type_drone_id'=>1,'location_id'=>1,'user_id'=>1],
            ['model'=>'Phantom 4 Pro','manufacturer'=>'DJL','payload'=>'2.5 kg','price'=>1499,'type_drone_id'=>1,'location_id'=>2,'user_id'=>1],
            ['model'=>'Matrice 300 RTK','manufacturer'=>'DJL','payload'=>'2.7 kg','price'=>7599,'type_drone_id'=>1,'location_id'=>3,'user_id'=>1],
            ['model'=>'INspire 2 ','manufacturer'=>'DJL','payload'=>'4.5 kg','price'=>3499,'type_drone_id'=>1,'location_id'=>4,'user_id'=>1],
            ['model'=>'Autel EVO LL','manufacturer'=>'Autel Robotics','payload'=>'2.7 kg','price'=>1999,'type_drone_id'=>5,'location_id'=>1,'user_id'=>1],
        ];

        Drone::insert($drones);
    }
}