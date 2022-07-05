<?php

use Illuminate\Database\Seeder;
use App\Thematic;
use App\MasterPost;
use Faker\Generator as Faker;

class MasterPostThematicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $masterPosts = MasterPost::all();
        

        foreach ($masterPosts as $key => $post) {
            for($i = 0; $i < 5; $i++){
                $thematics = Thematic::inRandomOrder()->limit(rand(0, 1))->get();
                $post->thematic()->attach($thematics->pluck('id')->all());
            }
        }
    }
}
