<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Thematic;

class ThematicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $thematics= ['Linguaggio scurrile', 'Gioco d\'azzardo', 'Contenuti sessuali espliciti', 'Tortura', 'Insetti', 'Teen Drama', 'Adatto ai più piccoli', 'Storia avvincente', 'Realismo', 'Combattimenti difficili'];
        foreach ($thematics as $key => $thematic) {
            Thematic::Create([
                'name' => $thematic,
                'description' => $faker->text(100),
                'image' => 'https://picsum.photos/200/300',
            ]);
        }
    }
}
