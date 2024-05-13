<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([RoleSeeder::class]);
        $this->call([SuperadminSeeder::class]);
        $this->call([AdminSeeder::class]);
        $this->call([UsersSeeder::class]);
        $this->call([CollectionsSeeder::class]);
        $this->call([EntriesSeeder::class]);
        $this->call([SidebarSeeder::class]);
        $this->call([TaxonomySeeder::class]);
        $this->call([TaxonomyTermsSeeder::class]);
    }
}
