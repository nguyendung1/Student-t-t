<?php

use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('school')->insert([
         
         ['name'=>'hungdao'],
         ['name'=>'nguyenkhuyen'],
         ['name'=>'quycap'],
         ['name'=>'nguyendu'],
         ['name'=>'nguyenhue']

        ]);
    }
}
