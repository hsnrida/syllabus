<?php

use Illuminate\Database\Seeder;
use App\Operation;
use App\Role;

class OperationSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $adminRole = Role::where('name', 'admin')->first();
    $builderRole = Role::where('name', 'Builder')->first();
    $validatorRole = Role::where('name', 'Validator')->first();
    $supervisorRole = Role::where('name', 'Supervisor')->first();

    $userManagment=Operation::create([
      'name' => 'user managment',
      'slug' => 'user-managment',
      'description' => 'manage the users ,change ,add ,delete , roles and etc ',
    ]);


    $viewSyllabus=Operation::create([
      'name' => 'view Syllabus',
      'slug' => 'view-syllabus',
      'description' => 'view particalur syllabus',
    ]);
    $viewSyllabus->roles()->attach($adminRole);
    $viewSyllabus->roles()->attach($builderRole);
    $viewSyllabus->roles()->attach($validatorRole);
    $viewSyllabus->roles()->attach($supervisorRole);

    $createSyllabus=Operation::create([
      'name' => 'create Syllabus',
      'slug' => 'create-syllabus',
      'description' => 'create a syllabus',
    ]);
    $createSyllabus->roles()->attach($supervisorRole);

    $createSyllabus=Operation::create([
      'name' => 'build Syllabus',
      'slug' => 'build-syllabus',
      'description' => 'edit particular syllabus',
    ]);
    $createSyllabus->roles()->attach($builderRole);

    $validateSyllabus=Operation::create([
      'name' => 'validate a Syllabus',
      'slug' => 'validate-syllabus',
      'description' => 'validate a syllabus',
    ]);
    $validateSyllabus->roles()->attach($validatorRole);

    $confirmSyllabus=Operation::create([
      'name' => 'confirm a Syllabus',
      'slug' => 'confirm-syllabus',
      'description' => 'confirm a syllabus',
    ]);
    $confirmSyllabus->roles()->attach($supervisorRole);


    $shareOnlineSyllabus=Operation::create([
      'name' => 'share a Syllabus online',
      'slug' => 'shareOnline-syllabus',
      'description' => 'share online a syllabus',
    ]);
    
    $shareOnlineSyllabus->roles()->attach($adminRole);
  


  }
}
