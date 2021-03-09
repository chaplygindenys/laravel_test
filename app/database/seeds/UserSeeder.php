<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \Illuminate\Support\Facades\DB::table('users')->insert([
          'name'       =>'Den',
          'first_name' =>'ch',
          'last_name'  =>'ly',
          'role'       =>'admin',
          'gender'     =>'male',
          'email'      =>'admin@test.com',
          'password'   =>bcrypt('admin@test.com'),
      ]);
    }
}
