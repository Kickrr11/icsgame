<?php

use Illuminate\Database\Seeder;
use App\Stronger;
use Illuminate\Database\Eloquent\Model;

class StrongerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('strongers')->delete();
        $stronger = [
            [
                'option_id' => 1,
                'stronger_id' => 2,
            ],
            [
                'option_id' => 2,
                'stronger_id' => 3,
            ],
            [
                'option_id' => 3,
                'stronger_id' => 1,
            ],
        ];
        foreach ($stronger as $value) {
            Stronger::create($value);
        }
    }
}
