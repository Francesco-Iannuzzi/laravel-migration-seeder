<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train->agency = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->code = $faker->bothify('??-######');
            $train->carriages = $faker->numberBetween(2, 11);
            $train->in_time = $faker->randomElement([1, 0]);
            $train->is_deleted = $faker->randomElement([1, 0]);
            $train->save();
        }
    }
}