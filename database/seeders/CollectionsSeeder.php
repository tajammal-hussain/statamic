<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Collections;

class CollectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $data = [
            'route' => null,
            'slug' => 1,
            'title_formats' => null,
            'publish' => 1,
            'entry_link' => 0,
            'sort_dir' => "Ascending",
            'orderable' => 0,
            'taxonomies' => null
        ];

        $jsonData = json_encode($data);
        $collections = [
            [
                'title' => 'Posts',
                'handle' => 'posts',
                'settings' => $jsonData,
            ],
            [
                'title' => 'Pages',
                'handle' => 'pages',
                'settings' => $jsonData,
            ],
            [
                'title' => 'News Articles',
                'handle' => 'news-articles',
                'settings' => $jsonData,
            ],
        ];
        Collections::insert($collections);
    }
}
