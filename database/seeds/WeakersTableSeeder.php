<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use App\Weaker;


class WeakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('weakers')->delete();
        $weaker = [
            [
                'option_id' => 1,
                'weaker_id' => 3,
            ],
            [
                'option_id' => 2,
                'weaker_id' => 1,
            ],
            [
                'option_id' => 3,
                'weaker_id' => 2,
            ],
        ];
        foreach ($weaker as $value) {
            Weaker::create($value);
        }
    }

}
