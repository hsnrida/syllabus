<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\Hash;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    User::truncate();
    // DB::table('role_user')->truncate();

    $adminRole = Role::where('name', 'admin')->first();
    $builderRole = Role::where('name', 'Builder')->first();
    $validatorRole = Role::where('name', 'Validator')->first();
    $supervisorRole = Role::where('name', 'Supervisor')->first();


    $admin = User::create([
      'name' => 'Admin ',
      'email' => 'admin@admin.com',
      'password' => Hash::make('123456789'),
      'department_id' => '1',
      'approved' => 1
    ]);
    $supervisor = User::create([
      'name' => 'Supervisor ',
      'email' => 'supervisor@supervisor.com',
      'password' => Hash::make('123456789'),
      'department_id' => '1',
      'approved' => 1
    ]);
    // $builder = User::create([
    //   'name' => 'Builder ',
    //   'email' => 'builder@builder.com',
    //   'password' => Hash::make('123456789'),
    //   'department_id' => '1',
    //   'approved' => 1
    // ]);
    $builderTwo = User::create([
      'name' => 'Builder two',
      'email' => 'buildertwo@builder.com',
      'password' => Hash::make('123456789'),
      'department_id' => '1',
      'approved' => 1
    ]);
    $builderThree = User::create([
      'name' => 'Builder three',
      'email' => 'builderthree@builder.com',
      'password' => Hash::make('123456789'),
      'department_id' => '1',
      'approved' => 1
    ]);
    $validator = User::create([
      'name' => 'Validator ',
      'email' => 'validator@validator.com',
      'password' => Hash::make('123456789'),
      'department_id' => '1',
      'approved' => 1
    ]);
    $validatorTwo = User::create([
      'name' => 'Validator two ',
      'email' => 'validatortwo@validator.com',
      'password' => Hash::make('123456789'),
      'department_id' => '1',
      'approved' => 1
    ]);
    $builder_test = User::create([
      'name' => 'Builder2 ',
      'email' => 'builder2@builder2.com',
      'password' => Hash::make('123456789'),
      'department_id' => '4'

    ]);

    $admin->roles()->attach($adminRole);
    // $builder->roles()->attach($builderRole);
    $validator->roles()->attach($validatorRole);
    $supervisor->roles()->attach($supervisorRole);
    $builder_test->roles()->attach($builderRole);

    $builderTwo->roles()->attach($builderRole);
    $builderThree->roles()->attach($builderRole);
    $validatorTwo->roles()->attach($validatorRole);






    //DB::statement('SET FOREIGN_KEY_CHECKS=1;');

  }
}
