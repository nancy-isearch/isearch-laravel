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
        'template_id',
    ];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function pageSections()
    {
        return $this->hasMany(PageSection::class);
    }
}
