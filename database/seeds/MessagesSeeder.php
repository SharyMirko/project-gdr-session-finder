<?php

use Illuminate\Database\Seeder;
use App\Messages;
use Faker\Generator as Faker;
use App\User;
use App\Chatroom;


class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            Messages::create([
                'user_id'=> User::inRandomOrder()->first()->id,
                'chatroom_id'=> Chatroom::inRandomOrder()->first()->id,
                'message'        =>  $faker->text(),
            ]);
        }
    }
}
