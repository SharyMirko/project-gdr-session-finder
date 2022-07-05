<?php

use Illuminate\Database\Seeder;
use App\Thematic;
use App\PlayerPost;

class PlayerPostThematicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playerPosts = PlayerPost::all();
        

        foreach ($playerPosts as $key => $post) {
            for($i = 0; $i < 5; $i++){
                $thematics = Thematic::inRandomOrder()->limit(rand(0, 1))->get();
                $post->thematic()->attach($thematics->pluck('id')->all());
            }
        }
    }
}
