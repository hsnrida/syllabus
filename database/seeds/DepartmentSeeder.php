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

          ###############################################
          #MU University
            Department::create([
            'name'=>'Bussnies',
            'description'=>'bussnies',
            'faculty_id'=>'3',
          ]);
          
          Department::create([
            'name'=>'Managment',
            'description'=>'mangment',
            'faculty_id'=>'3',
          ]);

          
          Department::create([
            'name'=>'Art',
            'description'=>'art',
            'faculty_id'=>'4',
          ]);
          
          Department::create([
            'name'=>'Music',
            'description'=>'music',
            'faculty_id'=>'4',
          ]);
          
          Department::create([
            'name'=>'Religions',
            'description'=>'Religions',
            'faculty_id'=>'5',
          ]);
          
          Department::create([
            'name'=>'Humanities',
            'description'=>'Humanities',
            'faculty_id'=>'5',
          ]);
          Department::create([
            'name'=>'Electricity',
            'description'=>'Electricity',
            'faculty_id'=>'6',
          ]);  
          Department::create([
            'name'=>'Mecatronic',
            'description'=>'Mecatronic',
            'faculty_id'=>'6',
          ]);
          Department::create([
            'name'=>'Informatics',
            'description'=>'computer science',
            'faculty_id'=>'7',
          ]);  
          Department::create([
            'name'=>'Math',
            'description'=>'math',
            'faculty_id'=>'7',
          ]);  
          Department::create([
            'name'=>'Pharmacy',
            'description'=>'pharmacy',
            'faculty_id'=>'8',
          ]);  
          Department::create([
            'name'=>'Informatics',
            'description'=>'computer science',
            'faculty_id'=>'9',
          ]);
          Department::create([
            'name'=>'Physics',
            'description'=>'physics',
            'faculty_id'=>'9',
          ]);
          Department::create([
            'name'=>'Arts',
            'description'=>'arts',
            'faculty_id'=>'10',
          ]);  
          Department::create([
            'name'=>'Music',
            'description'=>'Music',
            'faculty_id'=>'10',
          ]);  
          Department::create([
            'name'=>'Business',
            'description'=>'busines',
            'faculty_id'=>'11',
          ]);  
          Department::create([
            'name'=>'Managment',
            'description'=>'managment',
            'faculty_id'=>'11',
          ]);  
          Department::create([
            'name'=>'politics',
            'description'=>'politics',
            'faculty_id'=>'12',
          ]);
          Department::create([
            'name'=>'Nursing',
            'description'=>'Nursing',
            'faculty_id'=>'13',
          ]);  
            

          
          
            
            
          
            
          
          


    }
}
