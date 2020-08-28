<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'title'=>'laravel',
            'credits'=>'4',
            'description'=>'learn laravel framework',
            'department_id'=>'1',
            'code'=>'I3304'
          ]);
          Course::create([
            'title'=>'php',
            'credits'=>'4',
            'description'=>'learn php ',
            'department_id'=>'1',
            'code'=>'I3305'
          ]);
          Course::create([
            'title'=>'network',
            'credits'=>'4',
            'description'=>'learn network and adminstration',
            'department_id'=>'1',
            'code'=>'I3306'
          ]);
          Course::create([
            'title'=>'prolog',
            'credits'=>'4',
            'description'=>'learn logic and prolog ',
            'department_id'=>'1',
            'code'=>'I3307'
          ]);
          Course::create([
            'title'=>'data structures',
            'credits'=>'4',
            'description'=>'learn data structures and algorithms',
            'department_id'=>'1',
            'code'=>'I3308'
          ]);
          Course::create([
            'title'=>'image',
            'credits'=>'4',
            'description'=>'learn image 3d and gaming with unity',
            'department_id'=>'1',
            'code'=>'I3309'
          ]);
          Course::create([
            'title'=>'asp',
            'credits'=>'4',
            'description'=>'learn asp framework',
            'department_id'=>'1',
            'code'=>'I3310'
          ]);
          Course::create([
            'title'=>'integral',
            'credits'=>'3',
            'description'=>'learn integral',
            'department_id'=>'2',
            'code'=>'I3311'
          ]);
          Course::create([
            'title'=>'network',
            'credits'=>'3',
            'description'=>'learn networking and system adminstartion',
            'department_id'=>'3',
            'code'=>'I3312'
          ]);
    }
}
