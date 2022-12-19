<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_hour = $faker->time('H:i');
            $newTrain->arrival_hour = $faker->time('H:i','now');
            $newTrain->designatedTrain = $faker->randomNumber(8, true);
            $newTrain->wagonsNumber = $faker->numberBetween(4, 12);
            $newTrain->delayed = $faker->boolean();
            $newTrain->canceled = $faker->boolean();
            $newTrain->save();
        }
    }
}
