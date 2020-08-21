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
            'address'=>'3ed el Mrayse ',
          ]);
    }
}
