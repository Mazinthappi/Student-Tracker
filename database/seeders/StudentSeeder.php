<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
// use App\Models\StudentAddress;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run(){
    //     Student::factory()->count(10)->create();
    // }
    public function run(){
        Student::factory()->count(1)->create();
    }
   
}
