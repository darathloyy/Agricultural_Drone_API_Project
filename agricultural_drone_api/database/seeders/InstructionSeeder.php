<?php

namespace Database\Seeders;

use App\Models\Instruction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $instructions=[
            ['time_start'=>'07:00:00','time_end'=>'08:00:00','status'=>'good','feedback'=>'not issuse','drone_id'=>1,'plan_id'=>3],
            ['time_start'=>'09:00:00','time_end'=>'10:00:00','status'=>'nice','feedback'=>'not issuse','drone_id'=>1,'plan_id'=>2],
            ['time_start'=>'06:30:00','time_end'=>'7:30:00','status'=>'nothing to say ','feedback'=>'not issuse','drone_id'=>1,'plan_id'=>2],
            ['time_start'=>'08:45:00','time_end'=>'90:10:00','status'=>'simple','feedback'=>'not issuse','drone_id'=>1,'plan_id'=>5],
            ['time_start'=>'09:00:00','time_end'=>'10:00:00','status'=>'amazing','feedback'=>'not issuse','drone_id'=>1,'plan_id'=>1],
        ];

        Instruction::insert($instructions);
    }
}
