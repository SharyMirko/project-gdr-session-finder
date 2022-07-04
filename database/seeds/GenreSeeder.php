<?php

use Illuminate\Database\Seeder;
use App\Genre;
use Faker\Generator as Faker;


class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $genres= [ 'Fantasy', 'Sci-Fi', 'Mistero', 'Horror', 'Anime', 'Thriller', 'Drammatico', 'Opere Famose'];

        foreach ($genres as $key => $genre) {
            Genre::Create([
            'name' => $genre,
            'description' => $faker->text(100),
            'image' => 'https://picsum.photos/200/300',
        ]);
        }
        
    }
}
