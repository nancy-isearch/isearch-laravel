<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SectionTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function pageSections()
    {
        return $this->hasMany(PageSection::class);
    }
}