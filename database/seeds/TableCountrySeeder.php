<?php

use Illuminate\Database\Seeder;

class TableCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('country')->insert([

             [ 'Country'=>'Italy'],
             [ 'Country'=>'france'],
             [ 'Country'=>'Japan'],
             [ 'Country'=>'Korea'],
             [ 'Country'=>'China'],
             [ 'Country'=>'Arhentina']





        ]);
    }
}
