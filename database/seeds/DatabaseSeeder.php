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
        $this->call(OptionsTableSeeder::class);
        $this->call(StrongerTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(WeakersTableSeeder::class);
    }
}
