<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
        'is_active',
    ];

    public function sectionTemplates()
    {
        return $this->belongsToMany(SectionTemplate::class, 'template_section_templates')
            ->withPivot('sort_order')
            ->orderBy('template_section_templates.sort_order');
    }
}
