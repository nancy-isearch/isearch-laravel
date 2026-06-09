<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'is_active',
        'meta_title',
        'meta_description',
        'schema',
    ];

    public function pageSections()
    {
        return $this->hasMany(PageSection::class);
    }
}
