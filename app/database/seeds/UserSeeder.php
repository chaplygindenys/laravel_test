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
          'name'       =>'Den1',
          'first_name' =>'ch1',
          'last_name'  =>'ly1',
          'role'       =>'user',
          'gender'     =>'male',
          'email'      =>'admin1@test.com',
          'password'   =>bcrypt('admin1@test.com'),
      ]);
    }
}
