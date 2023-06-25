<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Sonny', 'score' => 80, 'teacher_id' => 1],
            ['id' => 2, 'name' => 'Sofia', 'score' => 85, 'teacher_id' => 1],
            ['id' => 3, 'name' => 'Sandra', 'score' => 75, 'teacher_id' => 1],
            ['id' => 4, 'name' => 'Naura', 'score' => 80, 'teacher_id' =>1],
        ];

        DB::table('students')->insert($data);
    }
}
