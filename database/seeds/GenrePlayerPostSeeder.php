<?php

use Illuminate\Database\Seeder;
use App\Genre;
use App\PlayerPost;
use Faker\Generator as Faker;

class GenrePlayerPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $playerPosts = PlayerPost::all();
        
        foreach ($playerPosts as $key => $post) {
            for($i = 0; $i < 2; $i++){
                $genre = Genre::inRandomOrder()->limit(rand(0,1))->get();
                
                $post->genre()->attach($genre->pluck('id')->all());
                
            }

        }
    }
}
