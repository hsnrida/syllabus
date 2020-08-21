<?php

use App\Faculty;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faculty::create([
            'name'=>'Faculty of Science',
            'description'=>'all the science:)',
            'branch'=>'1',
            'address'=>'al Hadath',
            'university_id'=>'1',
          ]);
        Faculty::create([
            'name'=>'Science and tech',
            'description'=>'not all the science:)',
            'branch'=>'1',
            'address'=>'medre',
            'university_id'=>'2',
          ]);
 


    }
}
