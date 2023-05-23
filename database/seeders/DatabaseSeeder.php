<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Sector;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $sector = new Sector();
        $sector->title = "TI";
        $sector->save();

        $user = new User();
        $user->first_name = 'Lucas';
        $user->last_name = 'Senna';
        $user->email = 'lucas.senna@egp.ce.gov.br';
        $user->password = bcrypt('102030aa');
        $user->level = 5;
        $user->sector_id = 1;
        $user->save();
    }
}
