<?php

use Illuminate\Database\Seeder;

class FighterTablesSeeser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fighter')->insert([
          ['Name_fighter'=>'Billy','city'=>'LA','date_of_birth'=>'1995-12-28','gender'=>'Male','area_id'=>1]

        ]);
    }
}
