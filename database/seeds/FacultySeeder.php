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
      #1  
      Faculty::create([
            'name'=>'Faculty of Science',
            'description'=>'all the science:)',
            'branch'=>'1',
            'address'=>'al Hadath',
            'university_id'=>'1',
          ]);
        #2
          Faculty::create([
            'name'=>'Science and tech',
            'description'=>'not all the science:)',
            'branch'=>'1',
            'address'=>'medre',
            'university_id'=>'2',
          ]);

          #MU Univiersity Faculties
          #3
          Faculty::create([
            'name'=>'Faculty of Business Administration ',
            'description'=>'Business:)',
            'branch'=>'1',
            'address'=>'Airport Bridge',
            'university_id'=>'4',
          ]);
          #4
          Faculty::create([
            'name'=>'Faculty of Mass Communication and Fine Arts ',
            'description'=>'Fine Arts:)',
            'branch'=>'1',
            'address'=>'Airport Bridge',
            'university_id'=>'4',
          ]);          
          #5
          Faculty::create([
            'name'=>'Faculty of Religions & Humanities ',
            'description'=>'Religions & Hmanities:)',
            'branch'=>'1',
            'address'=>'Airport Bridge',
            'university_id'=>'4',
          ]);
          ####################################
          
          #LIU University
          #6
          Faculty::create([
            'name'=>'Faculty of Engineering ',
            'description'=>'Engineering:)',
            'branch'=>'1',
            'address'=>'Saleem Slem',
            'university_id'=>'3',
          ]);
          #7
          Faculty::create([
            'name'=>'Faculty of Science ',
            'description'=>'Science:)',
            'branch'=>'2',
            'address'=>'Saida',
            'university_id'=>'3',
          ]);
          #8
          Faculty::create([
            'name'=>'Faculty of Pharmacy ',
            'description'=>'Pharmacy:)',
            'branch'=>'1',
            'address'=>'Salem Slem',
            'university_id'=>'3',
          ]);
        ###############################################
        #LAU University
        #9
        Faculty::create([
          'name'=>'Faculty of science ',
          'description'=>'science:)',
          'branch'=>'1',
          'address'=>'Beirut',
          'university_id'=>'5',
        ]);
        #10
        Faculty::create([
          'name'=>'Faculty of Arts ',
          'description'=>'Arts:)',
          'branch'=>'1',
          'address'=>'Beirut',
          'university_id'=>'5',
        ]);
        #11
        Faculty::create([
          'name'=>'Faculty of Business ',
          'description'=>'Business:)',
          'branch'=>'1',
          'address'=>'Beirut',
          'university_id'=>'5',
        ]);
        ################################################
        #IUL University
        #12
        Faculty::create([
          'name'=>'Faculty of Politics ',
          'description'=>'politics:)',
          'branch'=>'1',
          'address'=>'khaldeh',
          'university_id'=>'6',
        ]);
        #13
        Faculty::create([
          'name'=>'Faculty of Nursing',
          'description'=>'Nursing:)',
          'branch'=>'2',
          'address'=>'Tyr',
          'university_id'=>'6',
        ]);


 


    }
}
