<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(UserSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(InformationSeeder::class);
        $this->call(NotesSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(ScoreSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
