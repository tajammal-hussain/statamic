<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entries;

class EntriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entries::create([
            'site' => 'default',
            'collections_id' => '1',
            'status' => 'published',
            'date' => '2024-05-03 12:14:28',
            'slug' => 'checking-slug',
            'collection' => 'posts',
            'data' => '{"title":"entry checking","content":"this is just for checking","author":"user1","updated_by":1}',
        ]);
    }
}
