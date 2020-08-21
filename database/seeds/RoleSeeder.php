<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    Role::create([
      'name' => 'admin',
      'description' => 'admin of the department',
    ]);

    Role::create([
      'name' => 'builder',
      'description' => 'builder of syylabus in a department',
    ]);
    Role::create([
      'name' => 'validator',
      'description' => 'validator of syllabus in a department',
    ]);
    Role::create([
      'name' => 'supervisor',
      'description' => 'supervisor of the department',
    ]);
  }
}
