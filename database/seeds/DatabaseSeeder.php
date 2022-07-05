<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ThematicSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(MasterPostSeeder::class);
        $this->call(PlayerPostSeeder::class);
        $this->call(ChatroomSeeder::class);
        $this->call(MessagesSeeder::class);
        $this->call(ChatroomUserSeeder::class);
        $this->call(GenreMasterPostSeeder::class);
        $this->call(GenrePlayerPostSeeder::class);
        $this->call(MasterPostUserSeeder::class);
        $this->call(PlayerPostThematicSeeder::class);
        $this->call(MasterPostThematicSeeder::class);

    }
}
