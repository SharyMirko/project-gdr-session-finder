<?php

use Illuminate\Database\Seeder;
use App\User;
use App\MasterPost;
use Faker\Generator as Faker;


class MasterPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { 
        for ($i = 0; $i < 25; $i++){
            $faker->addProvider(new \Faker\Provider\it_IT\ Address($faker));
            MasterPost::create([
                'user_id' => User::inRandomOrder()->first()->id,
                'title'   => $faker->sentence(),
                'city' => $faker->city(),
                'description' =>  $faker->text(),
                'campaign_length' => $faker->randomElement(['oneshot', 'avventura breve', 'campagna lunga']),
                'game_system' =>$faker->randomElement(['D&D 5e', 'Vampires The Masquerade', 'Fabula Ultima', 'Call of Chtulu', 'Erika']),
                'visible' => $faker->randomElement([0, 1]),
                'tot_players' => $faker->numberBetween(1, 7),

            ]);
        }
    }
}
