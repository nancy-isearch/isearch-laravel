<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionField extends Model
{
    protected $fillable = [
        'section_template_id',
        'field_name',
        'field_label',
        'field_type',
        'is_required',
        'sort_order'
    ];

    public function sectionTemplate()
    {
        return $this->belongsTo(
            SectionTemplate::class
        );
    }
}
