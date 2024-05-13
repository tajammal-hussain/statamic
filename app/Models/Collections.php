<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collections extends Model
{
    use HasFactory;


    public function entries()
    {
        return $this->hasMany(Entries::class);
    }

    public function taxonomies()
    {
        return $this->belongsToMany(Taxonomies::class, 'collection_taxonomy');
    }
}
