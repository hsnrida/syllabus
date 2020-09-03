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
            'name'=>'Lebanese University',
            'address'=>'alMathaf',
          ]);
          University::create([
            'name'=>'American University of Beirut',
            'address'=>'3en el Mrayse ',
          ]);
          University::create([
            'name'=>'Lebanese International University',
            'address'=>'Saleem Slem ',
          ]);
          University::create([
            'name'=>'Al-Maaref University',
            'address'=>'Airport Bridge',
          ]);  
          University::create([
            'name'=>'Lebanese American University',
            'address'=>'Beirut',
          ]);  
          University::create([
            'name'=>'Islamic University of Lebanon',
            'address'=>'khaldeh',
          ]);  
            

    }
}
