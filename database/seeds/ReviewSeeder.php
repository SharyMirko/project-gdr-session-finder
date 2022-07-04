<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Review;
use App\User;
class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 30; $i++){
            Review::create([
                'user_id'=> User::inRandomOrder()->first()->id,
                'rating' => $faker->numberBetween(1, 5),
                'review'        =>  $faker->text(),
            ]);
        }
    }
}
