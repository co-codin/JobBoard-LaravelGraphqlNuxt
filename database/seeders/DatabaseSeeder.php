<?php

namespace Database\Seeders;

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
        $this->call(TagsTableSeeder::class);

         \App\Models\User::factory()->create([
             'password' => bcrypt('hellojava')
         ]);
    }
}
