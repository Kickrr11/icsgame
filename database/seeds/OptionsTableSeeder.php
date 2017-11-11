<?php

use Illuminate\Database\Seeder;
use App\Option;
use Illuminate\Database\Eloquent\Model;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('options')->delete();

        $options = array(
            ['name' => 'paper'],
            ['name' => 'rock'],
            ['name' => 'scissors'],
        );
            
        // Loop through each user above and create the record for them in the database
        foreach ($options as $option)
        {
            Option::create($option);
        }

        Model::reguard();

    }
}
