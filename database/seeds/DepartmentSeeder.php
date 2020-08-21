<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name'=>'Informatics',
            'description'=>'computer science and cypersecurity',
            'faculty_id'=>'1',
          ]);
          Department::create([
            'name'=>'Math',
            'description'=>'all about math',
            'faculty_id'=>'1',
          ]);
          Department::create([
            'name'=>'Informatic in Aub',
            'description'=>'computer science and cypersecurity in aub',
            'faculty_id'=>'2',
          ]);
    }
}
