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
            'title'=>'algebra',
            'credits'=>'6',
            'description'=>'learn algebra',
            'department_id'=>'2',
            'code'=>'I3312'
          ]);
          Course::create([
            'title'=>'Analysis',
            'credits'=>'3',
            'description'=>'learn Analysis',
            'department_id'=>'2',
            'code'=>'I3313'
          ]);
          Course::create([
            'title'=>'Geometry',
            'credits'=>'3',
            'description'=>'learn Geometry',
            'department_id'=>'2',
            'code'=>'I3314'
          ]);
          Course::create([
            'title'=>'Analysis2',
            'credits'=>'3',
            'description'=>'learn Ansalysis',
            'department_id'=>'2',
            'code'=>'I3315'
          ]);


          Course::create([
            'title'=>'network',
            'credits'=>'3',
            'description'=>'learn networking and system adminstartion',
            'department_id'=>'3',
            'code'=>'I3312'
          ]);



          Course::create([
            'title'=>'Database',
            'credits'=>'3',
            'description'=>'learn Database',
            'department_id'=>'3',
            'code'=>'I3313'
          ]);

          Course::create([
            'title'=>'GUI',
            'credits'=>'3',
            'description'=>'learn GUI',
            'department_id'=>'3',
            'code'=>'I3314'
          ]);

          Course::create([
            'title'=>'PHP',
            'credits'=>'3',
            'description'=>'learn PHP',
            'department_id'=>'3',
            'code'=>'I3315'
          ]);

          #################################################################

          Course::create([
            'title'=>'Computer',
            'credits'=>'3',
            'description'=>'learn Computer and Bussines',
            'department_id'=>'4',
            'code'=>'I3314'
          ]);

          Course::create([
            'title'=>'Bussines1',
            'credits'=>'3',
            'description'=>'learn Bussines1',
            'department_id'=>'4',
            'code'=>'I3315'
          ]);

          Course::create([
            'title'=>'Bussines2',
            'credits'=>'3',
            'description'=>'learn Bussines2',
            'department_id'=>'4',
            'code'=>'I3316'
          ]);

          Course::create([
            'title'=>'Bussines3',
            'credits'=>'3',
            'description'=>'learn Bussines3',
            'department_id'=>'4',
            'code'=>'I3317'
          ]);

          Course::create([
            'title'=>'Bussines4',
            'credits'=>'3',
            'description'=>'learn Bussines4',
            'department_id'=>'4',
            'code'=>'I3318'
          ]);

          ####################################################

          Course::create([
            'title'=>'Managment 1',
            'credits'=>'3',
            'description'=>'learn Managment 1',
            'department_id'=>'5',
            'code'=>'I3320'
          ]);

          Course::create([
            'title'=>'Managment 2',
            'credits'=>'3',
            'description'=>'learn Managment 2',
            'department_id'=>'5',
            'code'=>'I3321'
          ]);

          Course::create([
            'title'=>'Managment 3',
            'credits'=>'3',
            'description'=>'learn Managment 3',
            'department_id'=>'5',
            'code'=>'I3322'
          ]);

          Course::create([
            'title'=>'Managment 4',
            'credits'=>'3',
            'description'=>'learn Managment 4',
            'department_id'=>'5',
            'code'=>'I3323'
          ]);

          Course::create([
            'title'=>'Managment5',
            'credits'=>'3',
            'description'=>'learn Managment5',
            'department_id'=>'5',
            'code'=>'I3325'
          ]);
          ########################################################

          Course::create([
            'title'=>'Art 1',
            'credits'=>'3',
            'description'=>'learn Art 1',
            'department_id'=>'6',
            'code'=>'I3327'
          ]);
          Course::create([
            'title'=>'Art 2',
            'credits'=>'3',
            'description'=>'learn Art 2',
            'department_id'=>'6',
            'code'=>'I3326'
          ]);
          Course::create([
            'title'=>'Art 3',
            'credits'=>'3',
            'description'=>'learn Art 3',
            'department_id'=>'6',
            'code'=>'I3335'
          ]);
          Course::create([
            'title'=>'Art 4',
            'credits'=>'3',
            'description'=>'learn Art 4',
            'department_id'=>'6',
            'code'=>'I3325'
          ]);
          Course::create([
            'title'=>'Art 5',
            'credits'=>'3',
            'description'=>'learn Art5',
            'department_id'=>'6',
            'code'=>'I334'
          ]);
          ####################################################
          Course::create([
            'title'=>'Music 1',
            'credits'=>'3',
            'description'=>'learn Music 1',
            'department_id'=>'7',
            'code'=>'I3325'
          ]);
          Course::create([
            'title'=>'Music 2',
            'credits'=>'3',
            'description'=>'learn Music 2',
            'department_id'=>'7',
            'code'=>'I3326'
          ]);
          Course::create([
            'title'=>'Music 3',
            'credits'=>'3',
            'description'=>'learn Music 3',
            'department_id'=>'7',
            'code'=>'I3327'
          ]);
          Course::create([
            'title'=>'Music 4',
            'credits'=>'3',
            'description'=>'learn Music 4',
            'department_id'=>'7',
            'code'=>'I3328'
          ]);
          Course::create([
            'title'=>'Music 5',
            'credits'=>'3',
            'description'=>'learn Music 5',
            'department_id'=>'7',
            'code'=>'I3329'
          ]);
          Course::create([
            'title'=>'Religion 1',
            'credits'=>'3',
            'description'=>'learn Religion1',
            'department_id'=>'8',
            'code'=>'I3330'
          ]);
          Course::create([
            'title'=>'Religion 2',
            'credits'=>'3',
            'description'=>'learn Religion2',
            'department_id'=>'8',
            'code'=>'I3331'
          ]);
          Course::create([
            'title'=>'Religion3',
            'credits'=>'3',
            'description'=>'learn Religion3',
            'department_id'=>'8',
            'code'=>'I3332'
          ]);
          Course::create([
            'title'=>'Religion 4',
            'credits'=>'3',
            'description'=>'learn Religions4',
            'department_id'=>'8',
            'code'=>'I3333'
          ]);
          Course::create([
            'title'=>'Religion 5',
            'credits'=>'3',
            'description'=>'learn Religion5',
            'department_id'=>'8',
            'code'=>'I3367'
          ]);
          #########################################
          Course::create([
            'title'=>'Humanities 1',
            'credits'=>'3',
            'description'=>'learn Humanities1',
            'department_id'=>'9',
            'code'=>'I3368'
          ]);
          Course::create([
            'title'=>'Humanitie2',
            'credits'=>'3',
            'description'=>'learn Humanitie2',
            'department_id'=>'9',
            'code'=>'I3369'
          ]);
          Course::create([
            'title'=>'Humanities3',
            'credits'=>'3',
            'description'=>'learn Humanities3',
            'department_id'=>'9',
            'code'=>'I3370'
          ]);
          Course::create([
            'title'=>'Humanities 4',
            'credits'=>'3',
            'description'=>'learn Humanities4',
            'department_id'=>'9',
            'code'=>'I3371'
          ]);
          Course::create([
            'title'=>'Humanities 5',
            'credits'=>'3',
            'description'=>'learn Humanities5',
            'department_id'=>'9',
            'code'=>'I3372'
          ]);
              #########################################
              Course::create([
                'title'=>'Electricity 1 ',
                'credits'=>'3',
                'description'=>'learn Electricity 1',
                'department_id'=>'10',
                'code'=>'I3373'
              ]);
              Course::create([
                'title'=>'Electricity 2 ',
                'credits'=>'3',
                'description'=>'learn Electricity 2',
                'department_id'=>'10',
                'code'=>'I3374'
              ]);
              Course::create([
                'title'=>'Electricity 3 ',
                'credits'=>'3',
                'description'=>'learn Electricity 3',
                'department_id'=>'10',
                'code'=>'I3375'
              ]);
              Course::create([
                'title'=>'Electricity 4 ',
                'credits'=>'3',
                'description'=>'learn Electricity 4',
                'department_id'=>'10',
                'code'=>'I3376'
              ]);

              ###############################################################
              Course::create([
                'title'=>'Mecatronic 1 ',
                'credits'=>'3',
                'description'=>'learn Mecartronic 1',
                'department_id'=>'11',
                'code'=>'I3391'
              ]);
              Course::create([
                'title'=>'Mecatronic 2 ',
                'credits'=>'3',
                'description'=>'learn Mecartronic 2',
                'department_id'=>'12',
                'code'=>'I3392'
              ]);
              Course::create([
                'title'=>'Mecatronic 3 ',
                'credits'=>'3',
                'description'=>'learn Mecartronic 3',
                'department_id'=>'11',
                'code'=>'I3393'
              ]);    Course::create([
                'title'=>'Mecatronic 4 ',
                'credits'=>'3',
                'description'=>'learn Mecartronic 4',
                'department_id'=>'11',
                'code'=>'I3394'
              ]);    Course::create([
                'title'=>'Mecatronic 5 ',
                'credits'=>'3',
                'description'=>'learn Mecartronic 5',
                'department_id'=>'11',
                'code'=>'I3395'
              ]);
              ###########################################################
              Course::create([
                'title'=>'laravel',
                'credits'=>'4',
                'description'=>'learn laravel framework',
                'department_id'=>'12',
                'code'=>'I3304'
              ]);
              Course::create([
                'title'=>'php',
                'credits'=>'4',
                'description'=>'learn php ',
                'department_id'=>'12',
                'code'=>'I3305'
              ]);
              Course::create([
                'title'=>'network',
                'credits'=>'4',
                'description'=>'learn network and adminstration',
                'department_id'=>'12',
                'code'=>'I3306'
              ]);
              Course::create([
                'title'=>'prolog',
                'credits'=>'4',
                'description'=>'learn logic and prolog ',
                'department_id'=>'12',
                'code'=>'I3307'
              ]);
              Course::create([
                'title'=>'data structures',
                'credits'=>'4',
                'description'=>'learn data structures and algorithms',
                'department_id'=>'12',
                'code'=>'I3308'
              ]);

              ########################################################
              Course::create([
                'title'=>'integral',
                'credits'=>'3',
                'description'=>'learn integral',
                'department_id'=>'13',
                'code'=>'I3311'
              ]);
              Course::create([
                'title'=>'algebra',
                'credits'=>'6',
                'description'=>'learn algebra',
                'department_id'=>'13',
                'code'=>'I3312'
              ]);
              Course::create([
                'title'=>'Analysis',
                'credits'=>'3',
                'description'=>'learn Analysis',
                'department_id'=>'13',
                'code'=>'I3313'
              ]);
              Course::create([
                'title'=>'Geometry',
                'credits'=>'3',
                'description'=>'learn Geometry',
                'department_id'=>'13',
                'code'=>'I3314'
              ]);
              Course::create([
                'title'=>'Analysis2',
                'credits'=>'3',
                'description'=>'learn Ansalysis',
                'department_id'=>'13',
                'code'=>'I3315'
              ]);

              ###########################################
              Course::create([
                'title'=>'pharmacy 1',
                'credits'=>'3',
                'description'=>'learn pharmacy',
                'department_id'=>'14',
                'code'=>'I3316'
              ]);
              Course::create([
                'title'=>'pharmacy 2',
                'credits'=>'3',
                'description'=>'learn pharmacy2',
                'department_id'=>'14',
                'code'=>'I3317'
              ]);
              Course::create([
                'title'=>'pharmacy 3',
                'credits'=>'3',
                'description'=>'learn pharmacy3',
                'department_id'=>'14',
                'code'=>'I3318'
              ]);
              Course::create([
                'title'=>'pharmacy 4',
                'credits'=>'3',
                'description'=>'learn pharmac4',
                'department_id'=>'14',
                'code'=>'I3319'
              ]);
              Course::create([
                'title'=>'pharmacy 5',
                'credits'=>'3',
                'description'=>'learn pharmacy5',
                'department_id'=>'14',
                'code'=>'I3320'
              ]);
            #################################################
            Course::create([
              'title'=>'laravel',
              'credits'=>'4',
              'description'=>'learn laravel framework',
              'department_id'=>'15',
              'code'=>'I3304'
            ]);
            Course::create([
              'title'=>'php',
              'credits'=>'4',
              'description'=>'learn php ',
              'department_id'=>'15',
              'code'=>'I3305'
            ]);
            Course::create([
              'title'=>'network',
              'credits'=>'4',
              'description'=>'learn network and adminstration',
              'department_id'=>'15',
              'code'=>'I3306'
            ]);
            Course::create([
              'title'=>'prolog',
              'credits'=>'4',
              'description'=>'learn logic and prolog ',
              'department_id'=>'15',
              'code'=>'I3307'
            ]);
            Course::create([
              'title'=>'data structures',
              'credits'=>'4',
              'description'=>'learn data structures and algorithms',
              'department_id'=>'15',
              'code'=>'I3308'
            ]);
            #########################################################
            Course::create([
              'title'=>'physics 1',
              'credits'=>'4',
              'description'=>'learn physics1',
              'department_id'=>'16',
              'code'=>'I3301'
            ]);
            Course::create([
              'title'=>'physics 2',
              'credits'=>'4',
              'description'=>'learn physics2',
              'department_id'=>'16',
              'code'=>'I3302'
            ]);
            Course::create([
              'title'=>'physics 3',
              'credits'=>'4',
              'description'=>'learn physics3',
              'department_id'=>'16',
              'code'=>'I3303'
            ]);
            Course::create([
              'title'=>'physics 4',
              'credits'=>'4',
              'description'=>'learn physics4',
              'department_id'=>'16',
              'code'=>'I3304'
            ]);
            Course::create([
              'title'=>'physics 5',
              'credits'=>'4',
              'description'=>'learn physics5',
              'department_id'=>'16',
              'code'=>'I3305'
            ]);
              #################################################################
              Course::create([
                'title'=>'Art 1',
                'credits'=>'3',
                'description'=>'learn Art 1',
                'department_id'=>'17',
                'code'=>'I3327'
              ]);
              Course::create([
                'title'=>'Art 2',
                'credits'=>'3',
                'description'=>'learn Art 2',
                'department_id'=>'17',
                'code'=>'I3326'
              ]);
              Course::create([
                'title'=>'Art 3',
                'credits'=>'3',
                'description'=>'learn Art 3',
                'department_id'=>'17',
                'code'=>'I3335'
              ]);
              Course::create([
                'title'=>'Art 4',
                'credits'=>'3',
                'description'=>'learn Art 4',
                'department_id'=>'17',
                'code'=>'I3325'
              ]);
              Course::create([
                'title'=>'Art 5',
                'credits'=>'3',
                'description'=>'learn Art5',
                'department_id'=>'17',
                'code'=>'I334'
              ]);
              ####################################################
              Course::create([
                'title'=>'Music 1',
                'credits'=>'3',
                'description'=>'learn Music 1',
                'department_id'=>'18',
                'code'=>'I3325'
              ]);
              Course::create([
                'title'=>'Music 2',
                'credits'=>'3',
                'description'=>'learn Music 2',
                'department_id'=>'18',
                'code'=>'I3326'
              ]);
              Course::create([
                'title'=>'Music 3',
                'credits'=>'3',
                'description'=>'learn Music 3',
                'department_id'=>'18',
                'code'=>'I3327'
              ]);
              Course::create([
                'title'=>'Music 4',
                'credits'=>'3',
                'description'=>'learn Music 4',
                'department_id'=>'18',
                'code'=>'I3328'
              ]);
              Course::create([
                'title'=>'Music 5',
                'credits'=>'3',
                'description'=>'learn Music 5',
                'department_id'=>'18',
                'code'=>'I3329'
              ]);

          Course::create([
            'title'=>'Bussines1',
            'credits'=>'3',
            'description'=>'learn Bussines1',
            'department_id'=>'19',
            'code'=>'I3315'
          ]);

          Course::create([
            'title'=>'Bussines2',
            'credits'=>'3',
            'description'=>'learn Bussines2',
            'department_id'=>'19',
            'code'=>'I3316'
          ]);

          Course::create([
            'title'=>'Bussines3',
            'credits'=>'3',
            'description'=>'learn Bussines3',
            'department_id'=>'19',
            'code'=>'I3317'
          ]);

          Course::create([
            'title'=>'Bussines4',
            'credits'=>'3',
            'description'=>'learn Bussines4',
            'department_id'=>'19',
            'code'=>'I3318'
          ]);

          ####################################################

          Course::create([
            'title'=>'Managment 1',
            'credits'=>'3',
            'description'=>'learn Managment 1',
            'department_id'=>'20',
            'code'=>'I3320'
          ]);

          Course::create([
            'title'=>'Managment 2',
            'credits'=>'3',
            'description'=>'learn Managment 2',
            'department_id'=>'20',
            'code'=>'I3321'
          ]);

          Course::create([
            'title'=>'Managment 3',
            'credits'=>'3',
            'description'=>'learn Managment 3',
            'department_id'=>'20',
            'code'=>'I3322'
          ]);

          Course::create([
            'title'=>'Managment 4',
            'credits'=>'3',
            'description'=>'learn Managment 4',
            'department_id'=>'20',
            'code'=>'I3323'
          ]);

          Course::create([
            'title'=>'Managment5',
            'credits'=>'3',
            'description'=>'learn Managment5',
            'department_id'=>'20',
            'code'=>'I3325'
          ]);

          Course::create([
            'title'=>'politics 1',
            'credits'=>'3',
            'description'=>'learn politics 1',
            'department_id'=>'21',
            'code'=>'I3325'
          ]);

          Course::create([
            'title'=>'politics 2',
            'credits'=>'3',
            'description'=>'learn politics 2',
            'department_id'=>'21',
            'code'=>'I3324'
          ]);

          Course::create([
            'title'=>'politics 3',
            'credits'=>'3',
            'description'=>'learn politics 3',
            'department_id'=>'21',
            'code'=>'I3323'
          ]);

          Course::create([
            'title'=>'Nursing 1',
            'credits'=>'3',
            'description'=>'learn Nursing 1',
            'department_id'=>'22',
            'code'=>'I3351'
          ]);

          Course::create([
            'title'=>'Nursing 2',
            'credits'=>'3',
            'description'=>'learn Nursing 2',
            'department_id'=>'22',
            'code'=>'I3352'
          ]);

          Course::create([
            'title'=>'Nursing 3',
            'credits'=>'3',
            'description'=>'learn Nursing 3',
            'department_id'=>'22',
            'code'=>'I3353'
          ]);

          Course::create([
            'title'=>'Nursing 4',
            'credits'=>'3',
            'description'=>'learn Nursing 4',
            'department_id'=>'22',
            'code'=>'I3354'
          ]);







        }
}
