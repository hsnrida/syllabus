<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\University;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        University::create([
            'name'=>'LU',
            'address'=>'alMathaf',
          ]);
          University::create([
            'name'=>'AUB',
            'address'=>'3en el Mrayse ',
          ]);
          University::create([
            'name'=>'LIU',
            'address'=>'Saleem Slem ',
          ]);
          University::create([
            'name'=>'MU',
            'address'=>'Airport Bridge',
          ]);  
          University::create([
            'name'=>'LAU',
            'address'=>'Beirut',
          ]);  
          University::create([
            'name'=>'IUL',
            'address'=>'khaldeh',
          ]);  
            

    }
}
