<?php

use Illuminate\Database\Seeder;
use App\Chatroom;
use App\MasterPost;
use App\PlayerPost;
use Faker\Generator as Faker;

class ChatroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 12; $i++){
            $postId = MasterPost::inRandomOrder()->first()->id;
            Chatroom::create([
            'master_post_id' => $postId,
            'name' => MasterPost::where('id', $postId)->value('title'),
            'description' => $faker->text(40),

            ]); 
        }
        for($i = 0; $i < 12; $i++){
            $postId = PlayerPost::inRandomOrder()->first()->id;
            Chatroom::create([
            'player_post_id' => $postId,
            'name' => PlayerPost::where('id', $postId)->value('title'),
            'description' => $faker->text(40),

            ]); 
        }
    }
}
