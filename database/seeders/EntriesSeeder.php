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
            'status' => 'published',
            'date' => '12-12-2024',
            'slug' => 'checking-slug',
            'collection' => 'posts',
            'data' => '{"title":"entry checking","content":"this is just for checking","auther":"user1","updated_by":1}',
        ]);
    }
}
