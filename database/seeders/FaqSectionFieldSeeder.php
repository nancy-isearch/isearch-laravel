<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SectionField;

class FaqSectionFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // FAQ Template ID
        $faqTemplateId = 3;

        // Purane FAQ fields delete kar do
        SectionField::where('section_template_id', $faqTemplateId)->delete();

        $fields = [

            [
                'section_template_id' => $faqTemplateId,
                'field_name' => 'faq_title',
                'field_label' => 'FAQ Title',
                'field_type' => 'text',
                'is_required' => 1,
                'sort_order' => 1,
            ],

            [
                'section_template_id' => $faqTemplateId,
                'field_name' => 'faq_subtitle',
                'field_label' => 'FAQ Subtitle',
                'field_type' => 'textarea',
                'is_required' => 0,
                'sort_order' => 2,
            ],

            [
                'section_template_id' => $faqTemplateId,
                'field_name' => 'faqs',
                'field_label' => 'FAQs',
                'field_type' => 'repeater',
                'is_required' => 0,
                'sort_order' => 3,
            ],

        ];

        foreach ($fields as $field) {
            SectionField::create($field);
        }
    }
}
