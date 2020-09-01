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
      'name' => 'Admin User',
      'email' => 'admin@admin.com',
      'password' => Hash::make('123456789'),
      'department_id' => '1',
      'approved' => 1
    ]);
    $builder = User::create([
      'name' => 'Builder User',
      'email' => 'builder@builder.com',
      'password' => Hash::make('123456789'),
      'department_id' => '1',
      'approved' => 1
    ]);
    $validator = User::create([
      'name' => 'Validator User',
      'email' => 'validator@validator.com',
      'password' => Hash::make('123456789'),
      'department_id' => '1',
      'approved' => 1
    ]);
    $supervisor = User::create([
      'name' => 'Supervisor User',
      'email' => 'supervisor@supervisor.com',
      'password' => Hash::make('123456789'),
      'department_id' => '1',
      'approved' => 1
    ]);
    $builder_test = User::create([
      'name' => 'Builder2 User',
      'email' => 'builder2@builder2.com',
      'password' => Hash::make('123456789'),
      'department_id' => '4'

    ]);

    $admin->roles()->attach($adminRole);
    $builder->roles()->attach($builderRole);
    $validator->roles()->attach($validatorRole);
    $supervisor->roles()->attach($supervisorRole);
    $builder_test->roles()->attach($builderRole);




    //DB::statement('SET FOREIGN_KEY_CHECKS=1;');

  }
}
