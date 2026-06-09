<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    protected $fillable = [
        'page_id',
        'section_template_id',
        'section_data',
    ];

    protected $casts = [
        'section_data' => 'array',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function sectionTemplate()
    {
        return $this->belongsTo(SectionTemplate::class);
    }
}
