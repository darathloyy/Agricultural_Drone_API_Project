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
        $instructions = [
            ['run_mode' => 'processing', 'status' => 'good', 'feedback' => 'not issuse', 'drone_id' => 1, 'plan_id' => 3],
            ['run_mode' => 'processing', 'status' => 'nice', 'feedback' => 'not issuse', 'drone_id' => 1, 'plan_id' => 1],
            ['run_mode' => 'processing', 'status' => 'nothing to say ', 'feedback' => 'not issuse', 'drone_id' => 1, 'plan_id' => 2],
            ['run_mode' => 'processing', 'status' => 'simple', 'feedback' => 'not issuse', 'drone_id' => 1, 'plan_id' => 5],
            ['run_mode' => 'processing', 'status' => 'amazing', 'feedback' => 'not issuse', 'drone_id' => 4, 'plan_id' => 1],
        ];

        Instruction::insert($instructions);
    }
}
