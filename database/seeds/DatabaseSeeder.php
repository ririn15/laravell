<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(userTableSeeder::class);
         //$this->call(PotsTableSeeder::class);
         //$this->call(siswaTableSeeder::class);
      factory(App\Tabungan::class,100)->create();
      factory(App\customers::class,1000)->create();
    }
}
