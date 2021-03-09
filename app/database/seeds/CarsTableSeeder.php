<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('cars')->insert([
            'name' =>'Toyota',
            'model'=>'Avensis',
            ]);
        \Illuminate\Support\Facades\DB::table('cars')->insert([
            'name' =>'BNW',
            'model'=>'X6',
        ]);
    }
}
