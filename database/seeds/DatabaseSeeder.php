<?php

use App\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        
        $this->call(CourseSeader::class);
        $this->call(FacultySeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(OperationSeeder::class);
        $this->call(SyllabusSeeder::class);
        $this->call(UniversitySeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(TemplateSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
    }
}
