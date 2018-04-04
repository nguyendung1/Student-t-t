<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
              ['name'=>'nguyendung','date_of_birth'=>'1995-12-28','school_id'=>1,'address'=>'tp hoi an']
        ]);
    }
}
