<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { 
        for( $i = 0; $i < 15; $i++ ){
            User::create([
                'email' => $faker->email(),
                'name'  => $faker->firstName(),
                'surname'  => $faker->lastName(),
                'birthdate'  => $faker->datetime(),
                'gender'  => $faker->randomElement(['male', 'female', 'no thanks']),
                'password'  => Hash::make('ciaociao'), 
                'image'  => 'https://i.pravatar.cc/300',
                'description' => $faker->text(300),
                'role' =>  $faker->randomElement(['Master', 'Player', 'Erika']),
            ]);
            
        }
        
    }
}
