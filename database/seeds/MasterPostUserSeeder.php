<?php

use Illuminate\Database\Seeder;
use App\User;
use App\MasterPost;

class MasterPostUserSeeder extends Seeder
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
                $user = User::inRandomOrder()->limit(rand(0, 1))->get();
                $post->thematic()->attach($user->pluck('id')->all());
            }
        }
    }
}
