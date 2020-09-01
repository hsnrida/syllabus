<?php

use Illuminate\Database\Seeder;
use App\Syllabus;

class SyllabusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Syllabus::create([
            'title' => 'laravel',
            'course_id' => '1',
            'user_id' => '5',
            'code' => 'I3304',
            'syllabus' => 'larvel course framework',
            'stage' =>'10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'1',
        ]);
       
        Syllabus::create([
            'title' => 'laravel',
            'course_id' => '1',
            'user_id' => '5',
            'code' => 'I3304',
            'syllabus' => 'larvel course framework2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'1',
        ]);
        
        Syllabus::create([
            'title' => 'php',
            'course_id' => '2',
            'user_id' => '5',
            'code' => 'I3305',
            'syllabus' => 'php course framework',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'1',
        ]);     
        Syllabus::create([
            'title' => 'php',
            'course_id' => '2',
            'user_id' => '5',
            'code' => 'I3305',
            'syllabus' => 'php course framework2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'1',
        ]);      
        Syllabus::create([
            'title' => 'network',
            'course_id' => '3',
            'user_id' => '5',
            'code' => 'I3306',
            'syllabus' => 'network course systemadminstration',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'1',
        ]);  
        Syllabus::create([
            'title' => 'network',
            'course_id' => '3',
            'user_id' => '5',
            'code' => 'I3306',
            'syllabus' => 'network course systemadminstration',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'1',
        ]);  
        Syllabus::create([
            'title' => 'prolog',
            'course_id' => '4',
            'user_id' => '5',
            'code' => 'I3307',
            'syllabus' => 'prolog course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'1',
        ]);  
        Syllabus::create([
            'title' => 'prolog',
            'course_id' => '4',
            'user_id' => '5',
            'code' => 'I3307',
            'syllabus' => 'prolog course 2',
            'stage' =>'10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'1',
        ]);  
        Syllabus::create([
            'title' => 'datastructure',
            'course_id' => '5',
            'user_id' => '5',
            'code' => 'I3308',
            'syllabus' =>'datastructure course and advanced algorithms',
            
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'1',
        ]);  
        Syllabus::create([
            'title' => 'datastructure',
            'course_id' => '5',
            'user_id' => '5',
            'code' =>'I3308',
            'syllabus' => 'datastructure course and advanced algorithms2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'1',
        ]);  
        Syllabus::create([
            'title' => 'image',
            'course_id' => '6',
            'user_id' => '5',
            'code' => 'I3309',
            'syllabus' => 'image course 1',
            'stage' => '10',
            'created_at' =>'2018-08-28 12:48:54',
            'department_id'=>'1',
        ]);  
        Syllabus::create([
            'title' => 'image',
            'course_id' => '6',
            'user_id' => '5',
            'code' => 'I3309',
            'syllabus' => 'image course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'1',
        ]);  
        Syllabus::create([
            'title' => 'ASp',
            'course_id' => '7',
            'user_id' => '5',
            'code' => 'I3310',
            'syllabus' => 'Asp course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'1',
        ]);  
        
        Syllabus::create([
            'title' => 'ASp',
            'course_id' => '7',
            'user_id' => '5',
            'code' => 'I3310',
            'syllabus' => 'Asp course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'1',
        ]);  
        
        Syllabus::create([
            'title' => 'integral',
            'course_id' => '8',
            'user_id' => '5',
            'code' => 'I3311',
            'syllabus' => 'integral course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'2',
        ]);  
        Syllabus::create([
            'title' => 'integral',
            'course_id' => '8',
            'user_id' => '5',
            'code' => 'I3311',
            'syllabus' => 'integral course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'2',
        ]);
        Syllabus::create([
            'title' => 'Algebra',
            'course_id' => '9',
            'user_id' => '5',
            'code' => 'I3312',
            'syllabus' => 'algebra course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'2',
        ]);
        
        Syllabus::create([
            'title' => 'Algebra',
            'course_id' => '9',
            'user_id' => '5',
            'code' => 'I3312',
            'syllabus' => 'algebra course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'2',
        ]);
        
        Syllabus::create([
            'title' => 'Analysis',
            'course_id' => '10',
            'user_id' => '5',
            'code' => 'I3313',
            'syllabus' => 'analysis course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'2',
        ]);
        
        Syllabus::create([
            'title' => 'Analysis',
            'course_id' => '10',
            'user_id' => '5',
            'code' => 'I3313',
            'syllabus' => 'analysis course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'2',
        ]);
        
        Syllabus::create([
            'title' => 'Geometry',
            'course_id' => '11',
            'user_id' => '5',
            'code' => 'I3314',
            'syllabus' => 'geometry course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'2',
        ]);

        Syllabus::create([
            'title' => 'Geometry',
            'course_id' => '11',
            'user_id' => '5',
            'code' => 'I3314',
            'syllabus' => 'geometry course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'2',
        ]);
        
        Syllabus::create([
            'title' => 'Analysis2',
            'course_id' => '12',
            'user_id' => '5',
            'code' => 'I3315',
            'syllabus' => 'Analysis2 course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'2',
        ]);

        Syllabus::create([
            'title' => 'Analysis2',
            'course_id' => '12',
            'user_id' => '5',
            'code' => 'I3315',
            'syllabus' => 'Analysis2 course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'2',
        ]);
        
        Syllabus::create([
            'title' => 'network',
            'course_id' => '13',
            'user_id' => '5',
            'code' => 'I3312',
            'syllabus' => 'Network course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'3',
        ]);

        Syllabus::create([
            'title' => 'network',
            'course_id' => '13',
            'user_id' => '5',
            'code' => 'I3312',
            'syllabus' => 'Network course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'3',
        ]);
        Syllabus::create([
            'title' => 'network',
            'course_id' => '13',
            'user_id' => '5',
            'code' => 'I3312',
            'syllabus' => 'Network course 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'3',
        ]);
        
        Syllabus::create([
            'title' => 'database',
            'course_id' => '14',
            'user_id' => '5',
            'code' => 'I3313',
            'syllabus' => 'Database course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'3',
        ]);

        Syllabus::create([
            'title' => 'database',
            'course_id' => '14',
            'user_id' => '5',
            'code' => 'I3313',
            'syllabus' => 'Database course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'3',
        ]);

        Syllabus::create([
            'title' => 'database',
            'course_id' => '14',
            'user_id' => '5',
            'code' => 'I3313',
            'syllabus' => 'Database course 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'3',
        ]);

        Syllabus::create([
            'title' => 'GUI',
            'course_id' => '15',
            'user_id' => '5',
            'code' => 'I3314',
            'syllabus' => 'Graphical user interface syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'3',
        ]);


        Syllabus::create([
            'title' => 'GUI',
            'course_id' => '15',
            'user_id' => '5',
            'code' => 'I3314',
            'syllabus' => 'Graphical user interface syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'3',
        ]);

        Syllabus::create([
            'title' => 'GUI',
            'course_id' => '15',
            'user_id' => '5',
            'code' => 'I3314',
            'syllabus' => 'Graphical user interface syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'3',
        ]);

        
        Syllabus::create([
            'title' => 'php',
            'course_id' => '16',
            'user_id' => '5',
            'code' => 'I3315',
            'syllabus' => 'PHP syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'3',
        ]);

        
        Syllabus::create([
            'title' => 'php',
            'course_id' => '16',
            'user_id' => '5',
            'code' => 'I3315',
            'syllabus' => 'PHP syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'3',
        ]);
        
        Syllabus::create([
            'title' => 'php',
            'course_id' => '16',
            'user_id' => '5',
            'code' => 'I3315',
            'syllabus' => 'PHP syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'3',
        ]);
        
        Syllabus::create([
            'title' => 'computer',
            'course_id' => '17',
            'user_id' => '5',
            'code' => 'I3314',
            'syllabus' => 'computer syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'4',
        ]);
        
        Syllabus::create([
            'title' => 'computer',
            'course_id' => '17',
            'user_id' => '5',
            'code' => 'I3314',
            'syllabus' => 'computer syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'4',
        ]);
        
        Syllabus::create([
            'title' => 'computer',
            'course_id' => '17',
            'user_id' => '5',
            'code' => 'I3314',
            'syllabus' => 'computer syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'4',
        ]);
        
        Syllabus::create([
            'title' => 'bussines',
            'course_id' => '18',
            'user_id' => '5',
            'code' => 'I3315',
            'syllabus' => 'Bussnies syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'4',
        ]);
        
        Syllabus::create([
            'title' => 'bussines',
            'course_id' => '18',
            'user_id' => '5',
            'code' => 'I3315',
            'syllabus' => 'Bussnies syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'4',
        ]);
        
        Syllabus::create([
            'title' => 'bussines',
            'course_id' => '18',
            'user_id' => '5',
            'code' => 'I3315',
            'syllabus' => 'Bussnies syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'4',
        ]);

         Syllabus::create([
            'title' => 'bussines2',
            'course_id' => '19',
            'user_id' => '5',
            'code' => 'I3316',
            'syllabus' => 'Bussnies2 syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'4',
        ]);

        Syllabus::create([
            'title' => 'bussines2',
            'course_id' => '19',
            'user_id' => '5',
            'code' => 'I3316',
            'syllabus' => 'Bussnies2 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'4',
        ]);
        Syllabus::create([
           'title' => 'bussines2',
           'course_id' => '19',
           'user_id' => '5',
           'code' => 'I3316',
           'syllabus' => 'Bussnies2 syllabus 3',
           'stage' => '10',
           'created_at' => '2020-08-28 12:48:54',
           'department_id'=>'4',
       ]);
       
       Syllabus::create([
        'title' => 'bussines3',
        'course_id' => '20',
        'user_id' => '5',
        'code' => 'I3317',
        'syllabus' => 'Bussnies3 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'4',
    ]);
    
    Syllabus::create([
        'title' => 'bussines3',
        'course_id' => '20',
        'user_id' => '5',
        'code' => 'I3317',
        'syllabus' => 'Bussnies3 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'4',
    ]);
    
    Syllabus::create([
        'title' => 'bussines3',
        'course_id' => '20',
        'user_id' => '5',
        'code' => 'I3317',
        'syllabus' => 'Bussnies3 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'4',
    ]);

    
    Syllabus::create([
        'title' => 'bussines4',
        'course_id' => '21',
        'user_id' => '5',
        'code' => 'I3318',
        'syllabus' => 'Bussnies4 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'4',
    ]);
    
    Syllabus::create([
        'title' => 'bussines4',
        'course_id' => '21',
        'user_id' => '5',
        'code' => 'I3318',
        'syllabus' => 'Bussnies4 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'4',
    ]);
    
    Syllabus::create([
        'title' => 'bussines4',
        'course_id' => '21',
        'user_id' => '5',
        'code' => 'I3318',
        'syllabus' => 'Bussnies4 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'4',
    ]);
    




    Syllabus::create([
        'title' => 'Managment 1',
        'course_id' => '22',
        'user_id' => '5',
        'code' => 'I3320',
        'syllabus' => 'Managment 1 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'5',
    ]);
    
    
    Syllabus::create([
        'title' => 'Managment 1',
        'course_id' => '22',
        'user_id' => '5',
        'code' => 'I3320',
        'syllabus' => 'Managment 1 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'5',
    ]);
    Syllabus::create([
        'title' => 'Managment 1',
        'course_id' => '22',
        'user_id' => '5',
        'code' => 'I3320',
        'syllabus' => 'Managment 1 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'5',
    ]);
    Syllabus::create([
        'title' => 'Managment 2',
        'course_id' => '23',
        'user_id' => '5',
        'code' => 'I3321',
        'syllabus' => 'Managment 2 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'5',
    ]);

    Syllabus::create([
        'title' => 'Managment 2',
        'course_id' => '23',
        'user_id' => '5',
        'code' => 'I3321',
        'syllabus' => 'Managment 2 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'5',
    ]);

    Syllabus::create([
        'title' => 'Managment 3',
        'course_id' => '23',
        'user_id' => '5',
        'code' => 'I3321',
        'syllabus' => 'Managment 3 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'5',
    ]);

    Syllabus::create([
        'title' => 'Managment 3',
        'course_id' => '24',
        'user_id' => '5',
        'code' => 'I3322',
        'syllabus' => 'Managment 3 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'5',
    ]);

    Syllabus::create([
        'title' => 'Managment 3',
        'course_id' => '24',
        'user_id' => '5',
        'code' => 'I3322',
        'syllabus' => 'Managment 3 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'5',
    ]);
    
    Syllabus::create([
        'title' => 'Managment 3',
        'course_id' => '24',
        'user_id' => '5',
        'code' => 'I3322',
        'syllabus' => 'Managment 3 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'5',
    ]);

    
    Syllabus::create([
        'title' => 'Managment 4',
        'course_id' => '25',
        'user_id' => '5',
        'code' => 'I3323',
        'syllabus' => 'Managment 4 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'5',
    ]);
    
    Syllabus::create([
        'title' => 'Managment 4',
        'course_id' => '25',
        'user_id' => '5',
        'code' => 'I3322',
        'syllabus' => 'Managment 4 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'5',
    ]);
    
    Syllabus::create([
        'title' => 'Managment 4',
        'course_id' => '25',
        'user_id' => '5',
        'code' => 'I3322',
        'syllabus' => 'Managment 4 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'5',
    ]);
    
    Syllabus::create([
        'title' => 'Managment 5',
        'course_id' => '26',
        'user_id' => '5',
        'code' => 'I3323',
        'syllabus' => 'Managment 5 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'5',
    ]);

    
    Syllabus::create([
        'title' => 'Managment 5',
        'course_id' => '26',
        'user_id' => '5',
        'code' => 'I3323',
        'syllabus' => 'Managment 5 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'5',
    ]);
    
    Syllabus::create([
        'title' => 'Managment 5',
        'course_id' => '26',
        'user_id' => '5',
        'code' => 'I3323',
        'syllabus' => 'Managment 5 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'5',
    ]);


    
    Syllabus::create([
        'title' => 'Art 1',
        'course_id' => '27',
        'user_id' => '5',
        'code' => 'I3327',
        'syllabus' => 'Art 1 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'6',
    ]);

    Syllabus::create([
        'title' => 'Art 2',
        'course_id' => '27',
        'user_id' => '5',
        'code' => 'I3327',
        'syllabus' => 'Art 1 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'6',
    ]);
    
    Syllabus::create([
        'title' => 'Art 1',
        'course_id' => '27',
        'user_id' => '5',
        'code' => 'I3327',
        'syllabus' => 'Art 1 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'6',
    ]);

    
    Syllabus::create([
        'title' => 'Art 2',
        'course_id' => '28',
        'user_id' => '5',
        'code' => 'I3326',
        'syllabus' => 'Art 1 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'6',
    ]);
    
    Syllabus::create([
        'title' => 'Art 2',
        'course_id' => '28',
        'user_id' => '5',
        'code' => 'I3326',
        'syllabus' => 'Art 1 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'6',
    ]);
    
    Syllabus::create([
        'title' => 'Art 2',
        'course_id' => '28',
        'user_id' => '5',
        'code' => 'I3326',
        'syllabus' => 'Art 1 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'6',
    ]);

    
    Syllabus::create([
        'title' => 'Art 3',
        'course_id' => '29',
        'user_id' => '5',
        'code' => 'I3335',
        'syllabus' => 'Art 3 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'6',
    ]);

    
    Syllabus::create([
        'title' => 'Art 3',
        'course_id' => '29',
        'user_id' => '5',
        'code' => 'I3335',
        'syllabus' => 'Art 3 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'6',
    ]);
    
    Syllabus::create([
        'title' => 'Art 3',
        'course_id' => '29',
        'user_id' => '5',
        'code' => 'I3335',
        'syllabus' => 'Art 3 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'6',
    ]);

    
    Syllabus::create([
        'title' => 'Art 4',
        'course_id' => '30',
        'user_id' => '5',
        'code' => 'I3325',
        'syllabus' => 'Art 4 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'6',
    ]);
    
    Syllabus::create([
        'title' => 'Art 4',
        'course_id' => '30',
        'user_id' => '5',
        'code' => 'I3325',
        'syllabus' => 'Art 4 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'6',
    ]);
    
    Syllabus::create([
        'title' => 'Art 4',
        'course_id' => '30',
        'user_id' => '5',
        'code' => 'I3325',
        'syllabus' => 'Art 4 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'6',
    ]);
    
    Syllabus::create([
        'title' => 'Art 5',
        'course_id' => '31',
        'user_id' => '5',
        'code' => 'I334',
        'syllabus' => 'Art 5 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'6',
    ]);
    
    Syllabus::create([
        'title' => 'Art 5',
        'course_id' => '31',
        'user_id' => '5',
        'code' => 'I334',
        'syllabus' => 'Art 5 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'6',
    ]);
    
    Syllabus::create([
        'title' => 'Art 5',
        'course_id' => '31',
        'user_id' => '5',
        'code' => 'I334',
        'syllabus' => 'Art 5 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'6',
    ]);


    
    Syllabus::create([
        'title' => 'Music 1',
        'course_id' => '32',
        'user_id' => '5',
        'code' => 'I3325',
        'syllabus' => 'Music 1 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'7',
    ]);

    
    Syllabus::create([
        'title' => 'Music 1',
        'course_id' => '32',
        'user_id' => '5',
        'code' => 'I3325',
        'syllabus' => 'Music 1 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'7',
    ]);
    
    Syllabus::create([
        'title' => 'Music 1',
        'course_id' => '32',
        'user_id' => '5',
        'code' => 'I3325',
        'syllabus' => 'Music 1 syllabus 2',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'7',
    ]);

    
    Syllabus::create([
        'title' => 'Music 2',
        'course_id' => '33',
        'user_id' => '5',
        'code' => 'I3326',
        'syllabus' => 'Music 2 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'7',
    ]);
    
    Syllabus::create([
        'title' => 'Music 2',
        'course_id' => '33',
        'user_id' => '5',
        'code' => 'I3326',
        'syllabus' => 'Music 2 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'7',
    ]);
    
    Syllabus::create([
        'title' => 'Music 2',
        'course_id' => '33',
        'user_id' => '5',
        'code' => 'I3326',
        'syllabus' => 'Music 2 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'7',
    ]);

    
    Syllabus::create([
        'title' => 'Music 3',
        'course_id' => '34',
        'user_id' => '5',
        'code' => 'I3327',
        'syllabus' => 'Music 3 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'7',
    ]);
    
    Syllabus::create([
        'title' => 'Music 3',
        'course_id' => '34',
        'user_id' => '5',
        'code' => 'I3327',
        'syllabus' => 'Music 3 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'7',
    ]);
    
    Syllabus::create([
        'title' => 'Music 3',
        'course_id' => '34',
        'user_id' => '5',
        'code' => 'I3327',
        'syllabus' => 'Music 3 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'7',
    ]);

    
    Syllabus::create([
        'title' => 'Music 4',
        'course_id' => '35',
        'user_id' => '5',
        'code' => 'I3328',
        'syllabus' => 'Music 4 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'7',
    ]);

    
    Syllabus::create([
        'title' => 'Music 4',
        'course_id' => '35',
        'user_id' => '5',
        'code' => 'I3328',
        'syllabus' => 'Music 4 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'7',
    ]);
    
    Syllabus::create([
        'title' => 'Music 4',
        'course_id' => '35',
        'user_id' => '5',
        'code' => 'I3328',
        'syllabus' => 'Music 4 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'7',
    ]);

    
    Syllabus::create([
        'title' => 'Music 5',
        'course_id' => '36',
        'user_id' => '5',
        'code' => 'I3329',
        'syllabus' => 'Music 5 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'7',
    ]);
    
    
    Syllabus::create([
        'title' => 'Music 5',
        'course_id' => '36',
        'user_id' => '5',
        'code' => 'I3329',
        'syllabus' => 'Music 5 syllabus 2',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'7',
    ]);
    
    
    Syllabus::create([
        'title' => 'Music 5',
        'course_id' => '36',
        'user_id' => '5',
        'code' => 'I3329',
        'syllabus' => 'Music 5 syllabus 2',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'7',
    ]);

    
    
    Syllabus::create([
        'title' => 'Religions 1',
        'course_id' => '37',
        'user_id' => '5',
        'code' => 'I3330',
        'syllabus' => 'Religions syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'8',
    ]);

    
    Syllabus::create([
        'title' => 'Religions 1',
        'course_id' => '37',
        'user_id' => '5',
        'code' => 'I3330',
        'syllabus' => 'Religions 1 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'8',
    ]);
    
    Syllabus::create([
        'title' => 'Religions 1',
        'course_id' => '37',
        'user_id' => '5',
        'code' => 'I3330',
        'syllabus' => 'Religions 1 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'8',
    ]);

    
    Syllabus::create([
        'title' => 'Religions 2',
        'course_id' => '38',
        'user_id' => '5',
        'code' => 'I3331',
        'syllabus' => 'Religions 2 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'8',
    ]);
    
    Syllabus::create([
        'title' => 'Religions 2',
        'course_id' => '38',
        'user_id' => '5',
        'code' => 'I3331',
        'syllabus' => 'Religions 2 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'8',
    ]);

        
    Syllabus::create([
        'title' => 'Religions 2',
        'course_id' => '38',
        'user_id' => '5',
        'code' => 'I3331',
        'syllabus' => 'Religions 2 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'8',
    ]);

        
    Syllabus::create([
        'title' => 'Religions 3',
        'course_id' => '39',
        'user_id' => '5',
        'code' => 'I3332',
        'syllabus' => 'Religions 3 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'8',
    ]);

    Syllabus::create([
        'title' => 'Religions 3',
        'course_id' => '39',
        'user_id' => '5',
        'code' => 'I3332',
        'syllabus' => 'Religions 3 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'8',
    ]);

    
    Syllabus::create([
        'title' => 'Religions 3',
        'course_id' => '39',
        'user_id' => '5',
        'code' => 'I3332',
        'syllabus' => 'Religions 3 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'8',
    ]);

    
    Syllabus::create([
        'title' => 'Religions 4',
        'course_id' => '40',
        'user_id' => '5',
        'code' => 'I3333',
        'syllabus' => 'Religions 4 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'8',
    ]);
    
    Syllabus::create([
        'title' => 'Religions 4',
        'course_id' => '40',
        'user_id' => '5',
        'code' => 'I3333',
        'syllabus' => 'Religions 4 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'8',
    ]);
    
    Syllabus::create([
        'title' => 'Religions 4',
        'course_id' => '40',
        'user_id' => '5',
        'code' => 'I3333',
        'syllabus' => 'Religions 4 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'8',
    ]);

    
    Syllabus::create([
        'title' => 'Religions 5',
        'course_id' => '41',
        'user_id' => '5',
        'code' => 'I3367',
        'syllabus' => 'Religions 5 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'8',
    ]);
    
    Syllabus::create([
        'title' => 'Religions 5',
        'course_id' => '41',
        'user_id' => '5',
        'code' => 'I3367',
        'syllabus' => 'Religions 5 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'8',
    ]);
    
    Syllabus::create([
        'title' => 'Religions 5',
        'course_id' => '41',
        'user_id' => '5',
        'code' => 'I3367',
        'syllabus' => 'Religions 5 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'8',
    ]);
    
    Syllabus::create([
        'title' => 'Humanities 1',
        'course_id' => '42',
        'user_id' => '5',
        'code' => 'I3368',
        'syllabus' => 'Humanities  1syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'9',
    ]);

    Syllabus::create([
        'title' => 'Humanities 1',
        'course_id' => '42',
        'user_id' => '5',
        'code' => 'I3368',
        'syllabus' => 'Humanities 1 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'9',
    ]);

    Syllabus::create([
        'title' => 'Humanities 1',
        'course_id' => '42',
        'user_id' => '5',
        'code' => 'I3368',
        'syllabus' => 'Humanities  1 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'9',
    ]);

    
    Syllabus::create([
        'title' => 'Humanities 2',
        'course_id' => '43',
        'user_id' => '5',
        'code' => 'I3369',
        'syllabus' => 'Humanities 2 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'9',
    ]);
    
    Syllabus::create([
        'title' => 'Humanities 2',
        'course_id' => '44',
        'user_id' => '5',
        'code' => 'I3369',
        'syllabus' => 'Humanities 2 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'9',
    ]);
    
    Syllabus::create([
        'title' => 'Humanities 2',
        'course_id' => '43',
        'user_id' => '5',
        'code' => 'I3369',
        'syllabus' => 'Humanities 2 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'9',
    ]);

    
    Syllabus::create([
        'title' => 'Humanities 3',
        'course_id' => '44',
        'user_id' => '5',
        'code' => 'I3370',
        'syllabus' => 'Humanities 3 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'9',
    ]);

    
    Syllabus::create([
        'title' => 'Humanities 3',
        'course_id' => '44',
        'user_id' => '5',
        'code' => 'I3370',
        'syllabus' => 'Humanities 3 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'9',
    ]);
    
    Syllabus::create([
        'title' => 'Humanities 3',
        'course_id' => '44',
        'user_id' => '5',
        'code' => 'I3370',
        'syllabus' => 'Humanities 3 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'9',
    ]);

    
    Syllabus::create([
        'title' => 'Humanities 4',
        'course_id' => '45',
        'user_id' => '5',
        'code' => 'I3371',
        'syllabus' => 'Humanities 4 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'9',
    ]);

    
    Syllabus::create([
        'title' => 'Humanities 4',
        'course_id' => '45',
        'user_id' => '5',
        'code' => 'I3371',
        'syllabus' => 'Humanities 4 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'9',
    ]);
    
    Syllabus::create([
        'title' => 'Humanities 4',
        'course_id' => '45',
        'user_id' => '5',
        'code' => 'I3371',
        'syllabus' => 'Humanities 4 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'9',
    ]);

    
    Syllabus::create([
        'title' => 'Humanities 5',
        'course_id' => '46',
        'user_id' => '5',
        'code' => 'I3372',
        'syllabus' => 'Humanities 5 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'9',
    ]);

    
    Syllabus::create([
        'title' => 'Humanities 5',
        'course_id' => '46',
        'user_id' => '5',
        'code' => 'I3372',
        'syllabus' => 'Humanities 5 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'9',
    ]);
    
    Syllabus::create([
        'title' => 'Humanities 5',
        'course_id' => '46',
        'user_id' => '5',
        'code' => 'I3372',
        'syllabus' => 'Humanities 5 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'9',
    ]);

    
    Syllabus::create([
        'title' => 'Electricity 1',
        'course_id' => '47',
        'user_id' => '5',
        'code' => 'I3373',
        'syllabus' => 'Electricity 1 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'10',
    ]);

    
    Syllabus::create([
        'title' => 'Electricity 1',
        'course_id' => '47',
        'user_id' => '5',
        'code' => 'I3373',
        'syllabus' => 'Electricity 1 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'10',
    ]);
    
    Syllabus::create([
        'title' => 'Electricity 1',
        'course_id' => '47',
        'user_id' => '5',
        'code' => 'I3373',
        'syllabus' => 'Electricity 1 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'10',
    ]);

    
    Syllabus::create([
        'title' => 'Electricity 2',
        'course_id' => '48',
        'user_id' => '5',
        'code' => 'I3374',
        'syllabus' => 'Electricity 2 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'10',
    ]);

    
    Syllabus::create([
        'title' => 'Electricity 2',
        'course_id' => '48',
        'user_id' => '5',
        'code' => 'I3374',
        'syllabus' => 'Electricity 2 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'10',
    ]);
    
    Syllabus::create([
        'title' => 'Electricity 3',
        'course_id' => '49',
        'user_id' => '5',
        'code' => 'I3375',
        'syllabus' => 'Electricity 3 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'10',
    ]);
    
    Syllabus::create([
        'title' => 'Electricity 3',
        'course_id' => '49',
        'user_id' => '5',
        'code' => 'I3375',
        'syllabus' => 'Electricity 3 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'10',
    ]);
    
    Syllabus::create([
        'title' => 'Electricity 3',
        'course_id' => '49',
        'user_id' => '5',
        'code' => 'I3375',
        'syllabus' => 'Electricity 3 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'10',
    ]);

    
    Syllabus::create([
        'title' => 'Electricity 4',
        'course_id' => '50',
        'user_id' => '5',
        'code' => 'I3376',
        'syllabus' => 'Electricity 4 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'10',
    ]);
    
    Syllabus::create([
        'title' => 'Electricity 4',
        'course_id' => '50',
        'user_id' => '5',
        'code' => 'I3376',
        'syllabus' => 'Electricity 4 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'10',
    ]);
    
    Syllabus::create([
        'title' => 'Electricity 4',
        'course_id' => '50',
        'user_id' => '5',
        'code' => 'I3376',
        'syllabus' => 'Electricity 4 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'10',
    ]);

    
    Syllabus::create([
        'title' => 'Mechanics 1',
        'course_id' => '51',
        'user_id' => '5',
        'code' => 'I3391',
        'syllabus' => 'Mechanic syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'11',
    ]);
    
    Syllabus::create([
        'title' => 'Mechanics 1',
        'course_id' => '51',
        'user_id' => '5',
        'code' => 'I3391',
        'syllabus' => 'Mechanic syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'11',
    ]);
    
    Syllabus::create([
        'title' => 'Mechanics 1',
        'course_id' => '51',
        'user_id' => '5',
        'code' => 'I3391',
        'syllabus' => 'Mechanic syllabus 2',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'11',
    ]);

    
    Syllabus::create([
        'title' => 'Mechanics 2',
        'course_id' => '52',
        'user_id' => '5',
        'code' => 'I3392',
        'syllabus' => 'Mechanic 2 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'11',
    ]);
    
    Syllabus::create([
        'title' => 'Mechanics 2',
        'course_id' => '52',
        'user_id' => '5',
        'code' => 'I3392',
        'syllabus' => 'Mechanic 2 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'11',
    ]);

    
    Syllabus::create([
        'title' => 'Mechanics 2',
        'course_id' => '52',
        'user_id' => '5',
        'code' => 'I3392',
        'syllabus' => 'Mechanic 2 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'11',
    ]);

    
    Syllabus::create([
        'title' => 'Mechanics 3',
        'course_id' => '53',
        'user_id' => '5',
        'code' => 'I3393',
        'syllabus' => 'Mechanic 3 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'11',
    ]);

    
    Syllabus::create([
        'title' => 'Mechanics 3',
        'course_id' => '53',
        'user_id' => '5',
        'code' => 'I3393',
        'syllabus' => 'Mechanic 3 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'11',
    ]);
    
    Syllabus::create([
        'title' => 'Mechanics 3',
        'course_id' => '53',
        'user_id' => '5',
        'code' => 'I3393',
        'syllabus' => 'Mechanic 3 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'11',
    ]);

    
    Syllabus::create([
        'title' => 'Mechanics 4',
        'course_id' => '54',
        'user_id' => '5',
        'code' => 'I3394',
        'syllabus' => 'Mechanic 4 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'11',
    ]);
    
    Syllabus::create([
        'title' => 'Mechanics 4',
        'course_id' => '54',
        'user_id' => '5',
        'code' => 'I3394',
        'syllabus' => 'Mechanic 4 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'11',
    ]);
    
    Syllabus::create([
        'title' => 'Mechanics 4',
        'course_id' => '54',
        'user_id' => '5',
        'code' => 'I3394',
        'syllabus' => 'Mechanic 4 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'11',
    ]);

    
    Syllabus::create([
        'title' => 'Mechanics 5',
        'course_id' => '55',
        'user_id' => '5',
        'code' => 'I3395',
        'syllabus' => 'Mechanic 5 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'11',
    ]);
    
    
    Syllabus::create([
        'title' => 'Mechanics 5',
        'course_id' => '55',
        'user_id' => '5',
        'code' => 'I3395',
        'syllabus' => 'Mechanic 5 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'11',
    ]);
    
    
    Syllabus::create([
        'title' => 'Mechanics 5',
        'course_id' => '55',
        'user_id' => '5',
        'code' => 'I3395',
        'syllabus' => 'Mechanic 5 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'11',
    ]);
    

     Syllabus::create([
            'title' => 'laravel',
            'course_id' => '56',
            'user_id' => '5',
            'code' => 'I3304',
            'syllabus' => 'larvel course framework',
            'stage' =>'10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'12',
        ]);
       
        Syllabus::create([
            'title' => 'laravel',
            'course_id' => '57',
            'user_id' => '5',
            'code' => 'I3304',
            'syllabus' => 'larvel course framework2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'12',
        ]);
        
        Syllabus::create([
            'title' => 'laravel',
            'course_id' => '57',
            'user_id' => '5',
            'code' => 'I3304',
            'syllabus' => 'larvel course framework3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'12',
        ]);
        
        Syllabus::create([
            'title' => 'php',
            'course_id' => '58',
            'user_id' => '5',
            'code' => 'I3305',
            'syllabus' => 'php course framework1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'12',
        ]);     
        Syllabus::create([
            'title' => 'php',
            'course_id' => '58',
            'user_id' => '5',
            'code' => 'I3305',
            'syllabus' => 'php course framework2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'12',
        ]);      
        
        Syllabus::create([
            'title' => 'php',
            'course_id' => '58',
            'user_id' => '5',
            'code' => 'I3305',
            'syllabus' => 'php course framework3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'12',
        ]);      
        Syllabus::create([
            'title' => 'network',
            'course_id' => '59',
            'user_id' => '5',
            'code' => 'I3306',
            'syllabus' => 'network course systemadminstration 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'12',
        ]);  
        Syllabus::create([
            'title' => 'network',
            'course_id' => '59',
            'user_id' => '5',
            'code' => 'I3306',
            'syllabus' => 'network course systemadminstration2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'12',
        ]);  
        
        Syllabus::create([
            'title' => 'network',
            'course_id' => '59',
            'user_id' => '5',
            'code' => 'I3306',
            'syllabus' => 'network course systemadminstration3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'12',
        ]);  
        Syllabus::create([
            'title' => 'prolog',
            'course_id' => '60',
            'user_id' => '5',
            'code' => 'I3307',
            'syllabus' => 'prolog course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'12',
        ]);  
        Syllabus::create([
            'title' => 'prolog',
            'course_id' => '60',
            'user_id' => '5',
            'code' => 'I3307',
            'syllabus' => 'prolog course 2',
            'stage' =>'10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'12',
        ]);  
        
        Syllabus::create([
            'title' => 'prolog',
            'course_id' => '60',
            'user_id' => '5',
            'code' => 'I3307',
            'syllabus' => 'prolog course 3',
            'stage' =>'10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'12',
        ]);  
        Syllabus::create([
            'title' => 'datastructure',
            'course_id' => '61',
            'user_id' => '5',
            'code' => 'I3308',
            'syllabus' =>'datastructure course and advanced algorithms1',
            
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'12',
        ]);  
        Syllabus::create([
            'title' => 'datastructure',
            'course_id' => '61',
            'user_id' => '5',
            'code' =>'I3308',
            'syllabus' => 'datastructure course and advanced algorithms2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'12',
        ]);  
        
        Syllabus::create([
            'title' => 'datastructure',
            'course_id' => '61',
            'user_id' => '5',
            'code' =>'I3308',
            'syllabus' => 'datastructure course and advanced algorithms3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'12',
        ]);  

    
        Syllabus::create([
            'title' => 'integral',
            'course_id' => '62',
            'user_id' => '5',
            'code' => 'I3311',
            'syllabus' => 'integral course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'13',
        ]);  
        Syllabus::create([
            'title' => 'integral',
            'course_id' => '62',
            'user_id' => '5',
            'code' => 'I3311',
            'syllabus' => 'integral course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'13',
        ]);
        
        Syllabus::create([
            'title' => 'integral',
            'course_id' => '63',
            'user_id' => '5',
            'code' => 'I3311',
            'syllabus' => 'integral course 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'13',
        ]);
        Syllabus::create([
            'title' => 'Algebra',
            'course_id' => '64',
            'user_id' => '5',
            'code' => 'I3312',
            'syllabus' => 'algebra course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'13',
        ]);
        
        Syllabus::create([
            'title' => 'Algebra',
            'course_id' => '64',
            'user_id' => '5',
            'code' => 'I3312',
            'syllabus' => 'algebra course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'13',
        ]);
        
        Syllabus::create([
            'title' => 'Algebra',
            'course_id' => '64',
            'user_id' => '5',
            'code' => 'I3312',
            'syllabus' => 'algebra course 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'13',
        ]);
        
        Syllabus::create([
            'title' => 'Analysis',
            'course_id' => '65',
            'user_id' => '5',
            'code' => 'I3313',
            'syllabus' => 'analysis course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'13',
        ]);
        
        Syllabus::create([
            'title' => 'Analysis',
            'course_id' => '65',
            'user_id' => '5',
            'code' => 'I3313',
            'syllabus' => 'analysis course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'13',
        ]);
        
        Syllabus::create([
            'title' => 'Analysis',
            'course_id' => '65',
            'user_id' => '5',
            'code' => 'I3313',
            'syllabus' => 'analysis course 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'13',
        ]);
        
        
        Syllabus::create([
            'title' => 'Geometry',
            'course_id' => '66',
            'user_id' => '5',
            'code' => 'I3314',
            'syllabus' => 'geometry course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'13',
        ]);

        Syllabus::create([
            'title' => 'Geometry',
            'course_id' => '66',
            'user_id' => '5',
            'code' => 'I3314',
            'syllabus' => 'geometry course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'13',
        ]);
        
        Syllabus::create([
            'title' => 'Geometry',
            'course_id' => '66',
            'user_id' => '5',
            'code' => 'I3314',
            'syllabus' => 'geometry course 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'13',
        ]);
        
        
        Syllabus::create([
            'title' => 'Analysis2',
            'course_id' => '67',
            'user_id' => '5',
            'code' => 'I3315',
            'syllabus' => 'Analysis2 course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'13',
        ]);

        Syllabus::create([
            'title' => 'Analysis2',
            'course_id' => '67',
            'user_id' => '5',
            'code' => 'I3315',
            'syllabus' => 'Analysis2 course 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'13',
        ]);
        
        Syllabus::create([
            'title' => 'Analysis2',
            'course_id' => '67',
            'user_id' => '5',
            'code' => 'I3315',
            'syllabus' => 'Analysis2 course 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'13',
        ]);

        Syllabus::create([
            'title' => 'pharmacy 1',
            'course_id' => '68',
            'user_id' => '5',
            'code' => 'I3316',
            'syllabus' => 'pharmacy 1 syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'14',
        ]);
        
        Syllabus::create([
            'title' => 'pharmacy 1',
            'course_id' => '68',
            'user_id' => '5',
            'code' => 'I3316',
            'syllabus' => 'pharmacy 1 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'14',
        ]);

        
        Syllabus::create([
            'title' => 'pharmacy 1',
            'course_id' => '68',
            'user_id' => '5',
            'code' => 'I3316',
            'syllabus' => 'pharmacy 1 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'14',
        ]);

        
        Syllabus::create([
            'title' => 'pharmacy 2',
            'course_id' => '69',
            'user_id' => '5',
            'code' => 'I3317',
            'syllabus' => 'pharmacy 1 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'14',
        ]);

        
        Syllabus::create([
            'title' => 'pharmacy 2',
            'course_id' => '69',
            'user_id' => '5',
            'code' => 'I3317',
            'syllabus' => 'pharmacy 1 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'14',
        ]);
        
        Syllabus::create([
            'title' => 'pharmacy 2',
            'course_id' => '69',
            'user_id' => '5',
            'code' => 'I3317',
            'syllabus' => 'pharmacy 1 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'14',
        ]);

        
        Syllabus::create([
            'title' => 'pharmacy 3',
            'course_id' => '70',
            'user_id' => '5',
            'code' => 'I3318',
            'syllabus' => 'pharmacy 3 syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'14',
        ]);

        
        Syllabus::create([
            'title' => 'pharmacy 3',
            'course_id' => '70',
            'user_id' => '5',
            'code' => 'I3318',
            'syllabus' => 'pharmacy 3 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'14',
        ]);
        
        Syllabus::create([
            'title' => 'pharmacy 3',
            'course_id' => '70',
            'user_id' => '5',
            'code' => 'I3318',
            'syllabus' => 'pharmacy 3 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'14',
        ]);

        
        Syllabus::create([
            'title' => 'pharmacy 4',
            'course_id' => '71',
            'user_id' => '5',
            'code' => 'I3319',
            'syllabus' => 'pharmacy 4 syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'14',
        ]);
        
        Syllabus::create([
            'title' => 'pharmacy 4',
            'course_id' => '71',
            'user_id' => '5',
            'code' => 'I3319',
            'syllabus' => 'pharmacy 4 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'14',
        ]);

        
        Syllabus::create([
            'title' => 'pharmacy 4',
            'course_id' => '71',
            'user_id' => '5',
            'code' => 'I3319',
            'syllabus' => 'pharmacy 4 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'14',
        ]);

        
        Syllabus::create([
            'title' => 'pharmacy 5',
            'course_id' => '72',
            'user_id' => '5',
            'code' => 'I3320',
            'syllabus' => 'pharmacy 5 syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'14',
        ]);
        
        Syllabus::create([
            'title' => 'pharmacy 5',
            'course_id' => '72',
            'user_id' => '5',
            'code' => 'I3320',
            'syllabus' => 'pharmacy 5 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'14',
        ]);

        
        Syllabus::create([
            'title' => 'pharmacy 5',
            'course_id' => '72',
            'user_id' => '5',
            'code' => 'I3320',
            'syllabus' => 'pharmacy 5 syllabus 3',
            'stage' => '10',
            'created_at' => '2029-08-28 12:48:54',
            'department_id'=>'14',
        ]);


     Syllabus::create([
            'title' => 'laravel',
            'course_id' => '73',
            'user_id' => '5',
            'code' => 'I3304',
            'syllabus' => 'larvel course framework',
            'stage' =>'10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'15',
        ]);
       
        Syllabus::create([
            'title' => 'laravel',
            'course_id' => '73',
            'user_id' => '5',
            'code' => 'I3304',
            'syllabus' => 'larvel course framework2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'15',
        ]);
        
        Syllabus::create([
            'title' => 'laravel',
            'course_id' => '73',
            'user_id' => '5',
            'code' => 'I3304',
            'syllabus' => 'larvel course framework3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'15',
        ]);
        
        Syllabus::create([
            'title' => 'php',
            'course_id' => '74',
            'user_id' => '5',
            'code' => 'I3305',
            'syllabus' => 'php course framework1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'15',
        ]);     
        Syllabus::create([
            'title' => 'php',
            'course_id' => '74',
            'user_id' => '5',
            'code' => 'I3305',
            'syllabus' => 'php course framework2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'15',
        ]);      
        
        Syllabus::create([
            'title' => 'php',
            'course_id' => '74',
            'user_id' => '5',
            'code' => 'I3305',
            'syllabus' => 'php course framework3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'15',
        ]);      
        Syllabus::create([
            'title' => 'network',
            'course_id' => '75',
            'user_id' => '5',
            'code' => 'I3306',
            'syllabus' => 'network course systemadminstration 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'15',
        ]);  
        Syllabus::create([
            'title' => 'network',
            'course_id' => '75',
            'user_id' => '5',
            'code' => 'I3306',
            'syllabus' => 'network course systemadminstration2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'15',
        ]);  
        
        Syllabus::create([
            'title' => 'network',
            'course_id' => '75',
            'user_id' => '5',
            'code' => 'I3306',
            'syllabus' => 'network course systemadminstration3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'15',
        ]);  
        Syllabus::create([
            'title' => 'prolog',
            'course_id' => '76',
            'user_id' => '5',
            'code' => 'I3307',
            'syllabus' => 'prolog course 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'15',
        ]);  
        Syllabus::create([
            'title' => 'prolog',
            'course_id' => '76',
            'user_id' => '5',
            'code' => 'I3307',
            'syllabus' => 'prolog course 2',
            'stage' =>'10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'15',
        ]);  
        
        Syllabus::create([
            'title' => 'prolog',
            'course_id' => '76',
            'user_id' => '5',
            'code' => 'I3307',
            'syllabus' => 'prolog course 3',
            'stage' =>'10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'15',
        ]);  
        Syllabus::create([
            'title' => 'datastructure',
            'course_id' => '77',
            'user_id' => '5',
            'code' => 'I3308',
            'syllabus' =>'datastructure course and advanced algorithms1',
            
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'15',
        ]);  
        Syllabus::create([
            'title' => 'datastructure',
            'course_id' => '77',
            'user_id' => '5',
            'code' =>'I3308',
            'syllabus' => 'datastructure course and advanced algorithms2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'15',
        ]);  
        
        Syllabus::create([
            'title' => 'datastructure',
            'course_id' => '77',
            'user_id' => '5',
            'code' =>'I3308',
            'syllabus' => 'datastructure course and advanced algorithms3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'15',
        ]);  

        Syllabus::create([
            'title' => 'phisics 1',
            'course_id' => '78',
            'user_id' => '5',
            'code' =>'I3301',
            'syllabus' => 'phisics 1 syllabus 1',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'16',
        ]);  
        
        Syllabus::create([
            'title' => 'phisics 1',
            'course_id' => '78',
            'user_id' => '5',
            'code' =>'I3301',
            'syllabus' => 'phisics 1 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'16',
        ]);  

        
        Syllabus::create([
            'title' => 'phisics 1',
            'course_id' => '78',
            'user_id' => '5',
            'code' =>'I3301',
            'syllabus' => 'phisics 1 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'16',
        ]);  

        
        Syllabus::create([
            'title' => 'phisics 2',
            'course_id' => '79',
            'user_id' => '5',
            'code' =>'I3302',
            'syllabus' => 'phisics 1 syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'16',
        ]);  
        
        Syllabus::create([
            'title' => 'phisics 2',
            'course_id' => '79',
            'user_id' => '5',
            'code' =>'I3302',
            'syllabus' => 'phisics 1 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'16',
        ]);  
        
        Syllabus::create([
            'title' => 'phisics 2',
            'course_id' => '79',
            'user_id' => '5',
            'code' =>'I3302',
            'syllabus' => 'phisics 1 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'16',
        ]);  

        
        Syllabus::create([
            'title' => 'phisics 3',
            'course_id' => '80',
            'user_id' => '5',
            'code' =>'I3303',
            'syllabus' => 'phisics 1 syllabus 2',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'16',
        ]);  
        
        Syllabus::create([
            'title' => 'phisics 3',
            'course_id' => '80',
            'user_id' => '5',
            'code' =>'I3303',
            'syllabus' => 'phisics 1 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'16',
        ]);  
        
        Syllabus::create([
            'title' => 'phisics 3',
            'course_id' => '80',
            'user_id' => '5',
            'code' =>'I3303',
            'syllabus' => 'phisics 1 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'16',
        ]);  


        
        Syllabus::create([
            'title' => 'phisics 4',
            'course_id' => '81',
            'user_id' => '5',
            'code' =>'I3304',
            'syllabus' => 'phisics 4 syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'16',
        ]);  
        
        Syllabus::create([
            'title' => 'phisics 4',
            'course_id' => '81',
            'user_id' => '5',
            'code' =>'I3304',
            'syllabus' => 'phisics 4 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'16',
        ]);  

        
        Syllabus::create([
            'title' => 'phisics 4',
            'course_id' => '81',
            'user_id' => '5',
            'code' =>'I3304',
            'syllabus' => 'phisics 4 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'16',
        ]);  

        
        Syllabus::create([
            'title' => 'phisics 5',
            'course_id' => '82',
            'user_id' => '5',
            'code' =>'I3305',
            'syllabus' => 'phisics 5 syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'16',
        ]);  
        
        Syllabus::create([
            'title' => 'phisics 5',
            'course_id' => '82',
            'user_id' => '5',
            'code' =>'I3305',
            'syllabus' => 'phisics 5 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'16',
        ]);  
        
        Syllabus::create([
            'title' => 'phisics 5',
            'course_id' => '82',
            'user_id' => '5',
            'code' =>'I3305',
            'syllabus' => 'phisics 5 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'16',
        ]);  


        Syllabus::create([
            'title' => 'Art 1',
            'course_id' => '83',
            'user_id' => '5',
            'code' => 'I3327',
            'syllabus' => 'Art 1 syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'17',
        ]);
    
        Syllabus::create([
            'title' => 'Art 2',
            'course_id' => '83',
            'user_id' => '5',
            'code' => 'I3327',
            'syllabus' => 'Art 1 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'17',
        ]);
        
        Syllabus::create([
            'title' => 'Art 1',
            'course_id' => '83',
            'user_id' => '5',
            'code' => 'I3327',
            'syllabus' => 'Art 1 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'17',
        ]);
    
        
        Syllabus::create([
            'title' => 'Art 2',
            'course_id' => '84',
            'user_id' => '5',
            'code' => 'I3326',
            'syllabus' => 'Art 1 syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'17',
        ]);
        
        Syllabus::create([
            'title' => 'Art 2',
            'course_id' => '84',
            'user_id' => '5',
            'code' => 'I3326',
            'syllabus' => 'Art 1 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'17',
        ]);
        
        Syllabus::create([
            'title' => 'Art 2',
            'course_id' => '84',
            'user_id' => '5',
            'code' => 'I3326',
            'syllabus' => 'Art 1 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'17',
        ]);
    
        
        Syllabus::create([
            'title' => 'Art 3',
            'course_id' => '85',
            'user_id' => '5',
            'code' => 'I3335',
            'syllabus' => 'Art 3 syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'17',
        ]);
    
        
        Syllabus::create([
            'title' => 'Art 3',
            'course_id' => '85',
            'user_id' => '5',
            'code' => 'I3335',
            'syllabus' => 'Art 3 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'17',
        ]);
        
        Syllabus::create([
            'title' => 'Art 3',
            'course_id' => '85',
            'user_id' => '5',
            'code' => 'I3335',
            'syllabus' => 'Art 3 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'17',
        ]);
    
        
        Syllabus::create([
            'title' => 'Art 4',
            'course_id' => '86',
            'user_id' => '5',
            'code' => 'I3325',
            'syllabus' => 'Art 4 syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'17',
        ]);
        
        Syllabus::create([
            'title' => 'Art 4',
            'course_id' => '86',
            'user_id' => '5',
            'code' => 'I3325',
            'syllabus' => 'Art 4 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'17',
        ]);
        
        Syllabus::create([
            'title' => 'Art 4',
            'course_id' => '86',
            'user_id' => '5',
            'code' => 'I3325',
            'syllabus' => 'Art 4 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'17',
        ]);
        
        Syllabus::create([
            'title' => 'Art 5',
            'course_id' => '87',
            'user_id' => '5',
            'code' => 'I334',
            'syllabus' => 'Art 5 syllabus 1',
            'stage' => '10',
            'created_at' => '2018-08-28 12:48:54',
            'department_id'=>'17',
        ]);
        
        Syllabus::create([
            'title' => 'Art 5',
            'course_id' => '87',
            'user_id' => '5',
            'code' => 'I334',
            'syllabus' => 'Art 5 syllabus 2',
            'stage' => '10',
            'created_at' => '2019-08-28 12:48:54',
            'department_id'=>'17',
        ]);
        
        Syllabus::create([
            'title' => 'Art 5',
            'course_id' => '87',
            'user_id' => '5',
            'code' => 'I334',
            'syllabus' => 'Art 5 syllabus 3',
            'stage' => '10',
            'created_at' => '2020-08-28 12:48:54',
            'department_id'=>'17',
        ]);

  Syllabus::create([
        'title' => 'Music 1',
        'course_id' => '88',
        'user_id' => '5',
        'code' => 'I3325',
        'syllabus' => 'Music 1 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'18',
    ]);

    
    Syllabus::create([
        'title' => 'Music 1',
        'course_id' => '88',
        'user_id' => '5',
        'code' => 'I3325',
        'syllabus' => 'Music 1 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'18',
    ]);
    
    Syllabus::create([
        'title' => 'Music 1',
        'course_id' => '88',
        'user_id' => '5',
        'code' => 'I3325',
        'syllabus' => 'Music 1 syllabus 2',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'18',
    ]);

    
    Syllabus::create([
        'title' => 'Music 2',
        'course_id' => '89',
        'user_id' => '5',
        'code' => 'I3326',
        'syllabus' => 'Music 2 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'18',
    ]);
    
    Syllabus::create([
        'title' => 'Music 2',
        'course_id' => '89',
        'user_id' => '5',
        'code' => 'I3326',
        'syllabus' => 'Music 2 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'18',
    ]);
    
    Syllabus::create([
        'title' => 'Music 2',
        'course_id' => '89',
        'user_id' => '5',
        'code' => 'I3326',
        'syllabus' => 'Music 2 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'18',
    ]);

    
    Syllabus::create([
        'title' => 'Music 3',
        'course_id' => '90',
        'user_id' => '5',
        'code' => 'I3327',
        'syllabus' => 'Music 3 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'18',
    ]);
    
    Syllabus::create([
        'title' => 'Music 3',
        'course_id' => '90',
        'user_id' => '5',
        'code' => 'I3327',
        'syllabus' => 'Music 3 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'18',
    ]);
    
    Syllabus::create([
        'title' => 'Music 3',
        'course_id' => '90',
        'user_id' => '5',
        'code' => 'I3327',
        'syllabus' => 'Music 3 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'18',
    ]);

    
    Syllabus::create([
        'title' => 'Music 4',
        'course_id' => '91',
        'user_id' => '5',
        'code' => 'I3328',
        'syllabus' => 'Music 4 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'18',
    ]);

    
    Syllabus::create([
        'title' => 'Music 4',
        'course_id' => '91',
        'user_id' => '5',
        'code' => 'I3328',
        'syllabus' => 'Music 4 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'18',
    ]);
    
    Syllabus::create([
        'title' => 'Music 4',
        'course_id' => '91',
        'user_id' => '5',
        'code' => 'I3328',
        'syllabus' => 'Music 4 syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'18',
    ]);

    
    Syllabus::create([
        'title' => 'Music 5',
        'course_id' => '92',
        'user_id' => '5',
        'code' => 'I3329',
        'syllabus' => 'Music 5 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'18',
    ]);
    
    
    Syllabus::create([
        'title' => 'Music 5',
        'course_id' => '92',
        'user_id' => '5',
        'code' => 'I3329',
        'syllabus' => 'Music 5 syllabus 2',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'18',
    ]);
    
    
    Syllabus::create([
        'title' => 'Music 5',
        'course_id' => '92',
        'user_id' => '5',
        'code' => 'I3329',
        'syllabus' => 'Music 5 syllabus 2',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'18',
    ]);

    Syllabus::create([
        'title' => 'bussines',
        'course_id' => '93',
        'user_id' => '5',
        'code' => 'I3315',
        'syllabus' => 'Bussnies syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'19',
    ]);
    
    Syllabus::create([
        'title' => 'bussines',
        'course_id' => '93',
        'user_id' => '5',
        'code' => 'I3315',
        'syllabus' => 'Bussnies syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'19',
    ]);
    
    Syllabus::create([
        'title' => 'bussines',
        'course_id' => '93',
        'user_id' => '5',
        'code' => 'I3315',
        'syllabus' => 'Bussnies syllabus 3',
        'stage' => '10',
        'created_at' => '2020-08-28 12:48:54',
        'department_id'=>'19',
    ]);

     Syllabus::create([
        'title' => 'bussines2',
        'course_id' => '94',
        'user_id' => '5',
        'code' => 'I3316',
        'syllabus' => 'Bussnies2 syllabus 1',
        'stage' => '10',
        'created_at' => '2018-08-28 12:48:54',
        'department_id'=>'19',
    ]);

    Syllabus::create([
        'title' => 'bussines2',
        'course_id' => '94',
        'user_id' => '5',
        'code' => 'I3316',
        'syllabus' => 'Bussnies2 syllabus 2',
        'stage' => '10',
        'created_at' => '2019-08-28 12:48:54',
        'department_id'=>'19',
    ]);
    Syllabus::create([
       'title' => 'bussines2',
       'course_id' => '94',
       'user_id' => '5',
       'code' => 'I3316',
       'syllabus' => 'Bussnies2 syllabus 3',
       'stage' => '10',
       'created_at' => '2020-08-28 12:48:54',
       'department_id'=>'19',
   ]);
   
   Syllabus::create([
    'title' => 'bussines3',
    'course_id' => '95',
    'user_id' => '5',
    'code' => 'I3317',
    'syllabus' => 'Bussnies3 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'19',
]);

Syllabus::create([
    'title' => 'bussines3',
    'course_id' => '95',
    'user_id' => '5',
    'code' => 'I3317',
    'syllabus' => 'Bussnies3 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'19',
]);

Syllabus::create([
    'title' => 'bussines3',
    'course_id' => '95',
    'user_id' => '5',
    'code' => 'I3317',
    'syllabus' => 'Bussnies3 syllabus 3',
    'stage' => '10',
    'created_at' => '2020-08-28 12:48:54',
    'department_id'=>'19',
]);


Syllabus::create([
    'title' => 'bussines4',
    'course_id' => '96',
    'user_id' => '5',
    'code' => 'I3318',
    'syllabus' => 'Bussnies4 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'19',
]);

Syllabus::create([
    'title' => 'bussines4',
    'course_id' => '96',
    'user_id' => '5',
    'code' => 'I3318',
    'syllabus' => 'Bussnies4 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'19',
]);

Syllabus::create([
    'title' => 'bussines4',
    'course_id' => '96',
    'user_id' => '5',
    'code' => 'I3318',
    'syllabus' => 'Bussnies4 syllabus 3',
    'stage' => '10',
    'created_at' => '2020-08-28 12:48:54',
    'department_id'=>'19',
]);

Syllabus::create([
    'title' => 'Managment 1',
    'course_id' => '97',
    'user_id' => '5',
    'code' => 'I3320',
    'syllabus' => 'Managment 1 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'20',
]);


Syllabus::create([
    'title' => 'Managment 1',
    'course_id' => '97',
    'user_id' => '5',
    'code' => 'I3320',
    'syllabus' => 'Managment 1 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'20',
]);
Syllabus::create([
    'title' => 'Managment 1',
    'course_id' => '97',
    'user_id' => '5',
    'code' => 'I3320',
    'syllabus' => 'Managment 1 syllabus 3',
    'stage' => '10',
    'created_at' => '2020-08-28 12:48:54',
    'department_id'=>'20',
]);
Syllabus::create([
    'title' => 'Managment 2',
    'course_id' => '98',
    'user_id' => '5',
    'code' => 'I3321',
    'syllabus' => 'Managment 2 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'20',
]);

Syllabus::create([
    'title' => 'Managment 2',
    'course_id' => '98',
    'user_id' => '5',
    'code' => 'I3321',
    'syllabus' => 'Managment 2 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'20',
]);

Syllabus::create([
    'title' => 'Managment 3',
    'course_id' => '98',
    'user_id' => '5',
    'code' => 'I3321',
    'syllabus' => 'Managment 3 syllabus 3',
    'stage' => '10',
    'created_at' => '2020-08-28 12:48:54',
    'department_id'=>'20',
]);

Syllabus::create([
    'title' => 'Managment 3',
    'course_id' => '99',
    'user_id' => '5',
    'code' => 'I3322',
    'syllabus' => 'Managment 3 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'20',
]);

Syllabus::create([
    'title' => 'Managment 3',
    'course_id' => '99',
    'user_id' => '5',
    'code' => 'I3322',
    'syllabus' => 'Managment 3 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'20',
]);

Syllabus::create([
    'title' => 'Managment 3',
    'course_id' => '99',
    'user_id' => '5',
    'code' => 'I3322',
    'syllabus' => 'Managment 3 syllabus 3',
    'stage' => '10',
    'created_at' => '2020-08-28 12:48:54',
    'department_id'=>'20',
]);


Syllabus::create([
    'title' => 'Managment 4',
    'course_id' => '100',
    'user_id' => '5',
    'code' => 'I3323',
    'syllabus' => 'Managment 4 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'20',
]);

Syllabus::create([
    'title' => 'Managment 4',
    'course_id' => '100',
    'user_id' => '5',
    'code' => 'I3322',
    'syllabus' => 'Managment 4 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'20',
]);

Syllabus::create([
    'title' => 'Managment 4',
    'course_id' => '100',
    'user_id' => '5',
    'code' => 'I3322',
    'syllabus' => 'Managment 4 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'20',
]);

Syllabus::create([
    'title' => 'Managment 5',
    'course_id' => '101',
    'user_id' => '5',
    'code' => 'I3323',
    'syllabus' => 'Managment 5 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'20',
]);


Syllabus::create([
    'title' => 'Managment 5',
    'course_id' => '101',
    'user_id' => '5',
    'code' => 'I3323',
    'syllabus' => 'Managment 5 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'20',
]);

Syllabus::create([
    'title' => 'Managment 5',
    'course_id' => '101',
    'user_id' => '5',
    'code' => 'I3323',
    'syllabus' => 'Managment 5 syllabus 3',
    'stage' => '10',
    'created_at' => '2020-08-28 12:48:54',
    'department_id'=>'20',
]);

Syllabus::create([
    'title' => 'politics 1',
    'course_id' => '102',
    'user_id' => '5',
    'code' => 'I3325',
    'syllabus' => 'Politics 1 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'21',
]);

Syllabus::create([
    'title' => 'politics 1',
    'course_id' => '102',
    'user_id' => '5',
    'code' => 'I3325',
    'syllabus' => 'Politics 1 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'21',
]);

Syllabus::create([
    'title' => 'politics 1',
    'course_id' => '102',
    'user_id' => '5',
    'code' => 'I3325',
    'syllabus' => 'Politics 1 syllabus 3',
    'stage' => '10',
    'created_at' => '2020-08-28 12:48:54',
    'department_id'=>'21',
]);

Syllabus::create([
    'title' => 'politics 2',
    'course_id' => '103',
    'user_id' => '5',
    'code' => 'I3324',
    'syllabus' => 'Politics 2 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'21',
]);


Syllabus::create([
    'title' => 'politics 2',
    'course_id' => '103',
    'user_id' => '5',
    'code' => 'I3324',
    'syllabus' => 'Politics 2 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'21',
]);


Syllabus::create([
    'title' => 'politics 2',
    'course_id' => '103',
    'user_id' => '5',
    'code' => 'I3324',
    'syllabus' => 'Politics 2 syllabus 3',
    'stage' => '10',
    'created_at' => '2020-08-28 12:48:54',
    'department_id'=>'21',
]);


Syllabus::create([
    'title' => 'politics 3',
    'course_id' => '104',
    'user_id' => '5',
    'code' => 'I3323',
    'syllabus' => 'Politics 3 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'21',
]);


Syllabus::create([
    'title' => 'politics 3',
    'course_id' => '104',
    'user_id' => '5',
    'code' => 'I3323',
    'syllabus' => 'Politics 3 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'21',
]);


Syllabus::create([
    'title' => 'politics 3',
    'course_id' => '104',
    'user_id' => '5',
    'code' => 'I3323',
    'syllabus' => 'Politics 3 syllabus 3',
    'stage' => '10',
    'created_at' => '2020-08-28 12:48:54',
    'department_id'=>'21',
]);


Syllabus::create([
    'title' => 'Nursing 1',
    'course_id' => '105',
    'user_id' => '5',
    'code' => 'I3351',
    'syllabus' => 'Nursing 1 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'22',
]);


Syllabus::create([
    'title' => 'Nursing 1',
    'course_id' => '105',
    'user_id' => '5',
    'code' => 'I3351',
    'syllabus' => 'Nursing 1 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'22',
]);

Syllabus::create([
    'title' => 'Nursing 1',
    'course_id' => '105',
    'user_id' => '5',
    'code' => 'I3351',
    'syllabus' => 'Nursing 1 syllabus 3',
    'stage' => '10',
    'created_at' => '2020-08-28 12:48:54',
    'department_id'=>'22',
]);


Syllabus::create([
    'title' => 'Nursing 2',
    'course_id' => '106',
    'user_id' => '5',
    'code' => 'I3352',
    'syllabus' => 'Nursing 2 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'22',
]);


Syllabus::create([
    'title' => 'Nursing 2',
    'course_id' => '106',
    'user_id' => '5',
    'code' => 'I3352',
    'syllabus' => 'Nursing 2 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'22',
]);



Syllabus::create([
    'title' => 'Nursing 2',
    'course_id' => '106',
    'user_id' => '5',
    'code' => 'I3352',
    'syllabus' => 'Nursing 2 syllabus 3',
    'stage' => '10',
    'created_at' => '2020-08-28 12:48:54',
    'department_id'=>'22',
]);



Syllabus::create([
    'title' => 'Nursing 3',
    'course_id' => '107',
    'user_id' => '5',
    'code' => 'I3353',
    'syllabus' => 'Nursing 3 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'22',
]);


Syllabus::create([
    'title' => 'Nursing 3',
    'course_id' => '107',
    'user_id' => '5',
    'code' => 'I3353',
    'syllabus' => 'Nursing 3 syllabus 2',
    'stage' => '10',
    'created_at' => '2019-08-28 12:48:54',
    'department_id'=>'22',
]);

Syllabus::create([
    'title' => 'Nursing 3',
    'course_id' => '107',
    'user_id' => '5',
    'code' => 'I3353',
    'syllabus' => 'Nursing 3 syllabus 3',
    'stage' => '10',
    'created_at' => '2020-08-28 12:48:54',
    'department_id'=>'22',
]);


Syllabus::create([
    'title' => 'Nursing 4',
    'course_id' => '108',
    'user_id' => '5',
    'code' => 'I3354',
    'syllabus' => 'Nursing 4 syllabus 1',
    'stage' => '10',
    'created_at' => '2018-08-28 12:48:54',
    'department_id'=>'22',
]);


Syllabus::create([
    'title' => 'Nursing 4',
    'course_id' => '108',
    'user_id' => '5',
    'code' => 'I3354',
    'syllabus' => 'Nursing 4 syllabus 2',
    'stage' => '10',
    'created_at' => '2028-08-28 12:48:54',
    'department_id'=>'22',
]);


Syllabus::create([
    'title' => 'Nursing 4',
    'course_id' => '108',
    'user_id' => '5',
    'code' => 'I3354',
    'syllabus' => 'Nursing 4 syllabus 3',
    'stage' => '10',
    'created_at' => '2020-08-28 12:48:54',
    'department_id'=>'22',
]);


    







        
       



    


    }
}
