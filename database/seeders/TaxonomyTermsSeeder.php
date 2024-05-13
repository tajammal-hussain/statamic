<?php

namespace Database\Seeders;

use App\Models\TaxonomyTerms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxonomyTermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaxonomyTerms::create([
            'taxonomies_id' => '1',
            'site' => 'default',
            'slug' => 'testinf-taxonomies',
            'uri' => '/taxonomy-checking/testinf-taxonomies',
            'taxonomy' => 'taxonomies_checking',
            'data' => '{"title":"testinf taxonomies","content":"this is for testing tzxonomies","updated_by":1,"updated_at":1715082553,"blueprint":"taxonomy_checking"}',
        ]);
    }
}
