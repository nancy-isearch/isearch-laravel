<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SectionTemplate;

class SectionTemplateSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [

            [
                'name' => 'Breadcrumb',
                'slug' => 'breadcrumb'
            ],

            [
                'name' => 'CTA',
                'slug' => 'cta'
            ],

            [
                'name' => 'FAQ',
                'slug' => 'faq'
            ],

            [
                'name' => 'Testimonial',
                'slug' => 'testimonial'
            ],

            [
                'name' => 'Blog',
                'slug' => 'blog'
            ],

            [
                'name' => 'Footer',
                'slug' => 'footer'
            ],

        ];

        SectionTemplate::insert($sections);
    }
}