<?php

use Illuminate\Database\Seeder;
use App\Genre;
use App\MasterPost;
use Faker\Generator as Faker;



class GenreMasterPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        $masterPosts = MasterPost::all();
        
        foreach ($masterPosts as $key => $post) {
            for($i = 0; $i < 2; $i++){
                $genre = Genre::inRandomOrder()->limit(rand(0,1))->get();
                
                $post->genre()->attach($genre->pluck('id')->all());
                
            }

        }
        
    }
}
