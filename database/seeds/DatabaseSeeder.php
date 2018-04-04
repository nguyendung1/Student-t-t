<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
          //$this->call(breee_table_seeder::class);
          //$this->call(Cat_table_seeder::class);
        //$this->call(TableBoxersSeeder::class);
        //$this->call(TableCountrySeeder::class);
        // $this->call(AreaTablesSeeder::class);
        //$this->call(FighterTablesSeeser::class);
         $this->call(StudentTableSeeder::class);
        // $this->call(SchoolTableSeeder::class);

    }
}
