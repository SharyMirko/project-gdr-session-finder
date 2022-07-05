<?php

use Illuminate\Database\Seeder;
use App\Chatroom;
use Faker\Generator as Faker;
use App\User;

class ChatroomUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $chatrooms = Chatroom::all();
        

        foreach ($chatrooms as $key => $chatroom) {
            for($i = 0; $i < 5; $i++){
                $userId = User::inRandomOrder()->limit(rand(0, 1))->get();
                $chatroom->user()->attach($userId->pluck('id')->all());
            }
        }
    }
}
