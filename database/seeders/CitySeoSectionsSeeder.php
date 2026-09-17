<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SectionTemplate;
use App\Models\SectionField;

class CitySeoSectionsSeeder extends Seeder
{
    /**
     * City-SEO page ke sare section templates aur unke
     * dynamic fields seed karta hai.
     * Blade files: frontend/pages/sections/*.blade.php
     */
    public function run(): void
    {
        $sectionsToCreate = [

            // ============================================================
            // SECTION 1: HERO SECTION
            // Blade: frontend/pages/sections/hero-section.blade.php
            // ============================================================
            [
                'name' => 'Hero Section',
                'slug' => 'hero-section',
                'fields' => [
                    [
                        'name'  => 'badge_text',
                        'label' => 'Badge Text (e.g. Delhi’s Top SEO Agency)',
                        'type'  => 'text',
                    ],
                    [
                        'name'  => 'heading',
                        'label' => 'Main Heading (H1)',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'description',
                        'label' => 'Hero Description',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'primary_btn_text',
                        'label' => 'Primary Button Text (e.g. Get Free SEO Audit)',
                        'type'  => 'text',
                    ],
                    [
                        'name'  => 'secondary_btn_text',
                        'label' => 'Secondary Button Text (e.g. Explore Services)',
                        'type'  => 'text',
                    ],
                    [
                        'name'  => 'secondary_btn_link',
                        'label' => 'Secondary Button Link (e.g. #services)',
                        'type'  => 'text',
                    ],
                    [
                        'name'       => 'stats',
                        'label'      => 'Hero Stats Counter',
                        'type'       => 'repeater',
                        'sub_fields' => [
                            ['field_name' => 'value', 'field_label' => 'Stat Value (e.g. 200+)', 'field_type' => 'text'],
                            ['field_name' => 'label', 'field_label' => 'Stat Label (e.g. Happy Clients)', 'field_type' => 'text'],
                        ],
                    ],
                    [
                        'name'       => 'pills_list',
                        'label'      => 'Bottom Scrolling Pills / Marquee',
                        'type'       => 'repeater',
                        'sub_fields' => [
                            ['field_name' => 'pill_text', 'field_label' => 'Pill Text (e.g. 100% White Hat SEO)', 'field_type' => 'text'],
                        ],
                    ],
                ],
            ],

            // ============================================================
            // SECTION 2: DIGITAL SPACE / WHY US
            // Blade: frontend/pages/sections/digital-space-section.blade.php
            // ============================================================
            [
                'name' => 'Digital Space Section',
                'slug' => 'digital-space-section',
                'fields' => [
                    [
                        'name'  => 'heading',
                        'label' => 'Main Heading',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'description',
                        'label' => 'Lead Description',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'side_image',
                        'label' => 'Side Image',
                        'type'  => 'file',
                    ],
                    [
                        'name'       => 'steps_list',
                        'label'      => 'Strategy / Feature Points (List)',
                        'type'       => 'repeater',
                        'sub_fields' => [
                            ['field_name' => 'step_title', 'field_label' => 'Point Title', 'field_type' => 'text'],
                            ['field_name' => 'step_description', 'field_label' => 'Point Description', 'field_type' => 'textarea'],
                        ],
                    ],
                ],
            ],

            // ============================================================
            // SECTION 3: SEO PROCESS / RANKING
            // Blade: frontend/pages/sections/seo-process-ranking-section.blade.php
            // ============================================================
            [
                'name' => 'SEO Process Ranking Section',
                'slug' => 'seo-process-ranking-section',
                'fields' => [
                    [
                        'name'  => 'heading',
                        'label' => 'Section Heading',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'description',
                        'label' => 'Lead Description',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'       => 'process_cards',
                        'label'      => 'Process Cards (6 Steps)',
                        'type'       => 'repeater',
                        'sub_fields' => [
                            ['field_name' => 'card_title', 'field_label' => 'Card Title (e.g. Technical SEO)', 'field_type' => 'text'],
                            ['field_name' => 'card_description', 'field_label' => 'Card Description', 'field_type' => 'textarea'],
                            ['field_name' => 'card_icon', 'field_label' => 'Icon Symbol ID (e.g. search-01-stroke-rounded)', 'field_type' => 'text'],
                        ],
                    ],
                ],
            ],

            // ============================================================
            // SECTION 4: WHY CHOOSE ISEARCH
            // Blade: frontend/pages/sections/why-choose-isearch-section.blade.php
            // ============================================================
            [
                'name' => 'Why Choose iSearch Section',
                'slug' => 'why-choose-isearch-section',
                'fields' => [
                    [
                        'name'  => 'heading',
                        'label' => 'Main Heading',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'description',
                        'label' => 'Subtitle / Description',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'       => 'cards',
                        'label'      => 'Why Choose Grid Cards',
                        'type'       => 'repeater',
                        'sub_fields' => [
                            ['field_name' => 'card_title', 'field_label' => 'Card Title', 'field_type' => 'text'],
                            ['field_name' => 'card_description', 'field_label' => 'Card Description', 'field_type' => 'textarea'],
                            ['field_name' => 'card_icon', 'field_label' => 'Icon Symbol ID (e.g. target-02-stroke-rounded)', 'field_type' => 'text'],
                        ],
                    ],
                ],
            ],

            // ============================================================
            // SECTION 5: SEO SERVICES / TECHNIQUES SLIDER
            // Blade: frontend/pages/sections/seo-services-section.blade.php
            // ============================================================
            [
                'name' => 'SEO Prominent Techniques Section',
                'slug' => 'seo-services-section',
                'fields' => [
                    [
                        'name'  => 'heading',
                        'label' => 'Section Heading',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'description',
                        'label' => 'Lead Description',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'       => 'service_cards',
                        'label'      => 'Slider Service Cards',
                        'type'       => 'repeater',
                        'sub_fields' => [
                            ['field_name' => 'service_title', 'field_label' => 'Service Title (e.g. SEO Process)', 'field_type' => 'text'],
                            ['field_name' => 'service_link', 'field_label' => 'Anchor / Target Link', 'field_type' => 'text'],
                            ['field_name' => 'service_link_text', 'field_label' => 'Link Text (e.g. Learn more →)', 'field_type' => 'text'],
                            ['field_name' => 'service_icon', 'field_label' => 'Icon Symbol ID', 'field_type' => 'text'],
                        ],
                    ],
                ],
            ],

            // ============================================================
            // SECTION 6: SEO DUAL SECTION
            // Blade: frontend/pages/sections/seo-dual-section.blade.php
            // ============================================================
            [
                'name' => 'SEO Dual Section',
                'slug' => 'seo-dual-section',
                'fields' => [
                    [
                        'name'  => 'left_heading',
                        'label' => 'Left Column Heading',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'left_description',
                        'label' => 'Left Column Description',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'right_heading',
                        'label' => 'Right Column Heading',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'right_description',
                        'label' => 'Right Column Description',
                        'type'  => 'textarea',
                    ],
                ],
            ],

            // ============================================================
            // SECTION 7: FAQ SECTION
            // Blade: frontend/pages/sections/faq.blade.php
            // ============================================================
            [
                'name' => 'FAQ Section',
                'slug' => 'faq-section',
                'fields' => [
                    [
                        'name'  => 'faq_title',
                        'label' => 'FAQ Heading',
                        'type'  => 'text',
                    ],
                    [
                        'name'  => 'faq_subtitle',
                        'label' => 'FAQ Subtitle',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'       => 'faqs',
                        'label'      => 'FAQs List',
                        'type'       => 'repeater',
                        'sub_fields' => [
                            ['field_name' => 'question', 'field_label' => 'Question', 'field_type' => 'text'],
                            ['field_name' => 'answer', 'field_label' => 'Answer', 'field_type' => 'textarea'],
                        ],
                    ],
                ],
            ],

            // ============================================================
            // SECTION 8: TESTIMONIAL SECTION
            // Blade: frontend/pages/sections/testimonial.blade.php
            // ============================================================
            [
                'name' => 'Testimonial Section',
                'slug' => 'testimonial-section',
                'fields' => [
                    [
                        'name'  => 'heading',
                        'label' => 'Heading',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'description',
                        'label' => 'Description',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'illustration',
                        'label' => 'Illustration Image',
                        'type'  => 'file',
                    ],
                    [
                        'name'       => 'testimonials',
                        'label'      => 'Testimonials',
                        'type'       => 'repeater',
                        'sub_fields' => [
                            ['field_name' => 'quote', 'field_label' => 'Quote', 'field_type' => 'textarea'],
                            ['field_name' => 'author_name', 'field_label' => 'Author Name', 'field_type' => 'text'],
                            ['field_name' => 'author_role', 'field_label' => 'Author Role', 'field_type' => 'text'],
                            ['field_name' => 'brand_logo', 'field_label' => 'Brand Logo Icon / Image', 'field_type' => 'file'],
                        ],
                    ],
                ],
            ],

            // ============================================================
            // SECTION 9: TECHNICAL SEO DETAILS
            // Blade: frontend/pages/sections/technical-seo-details-blade.php
            // ============================================================
            [
                'name' => 'Technical SEO Details Section',
                'slug' => 'technical-seo-details-section',
                'fields' => [
                    [
                        'name'       => 'tabs_list',
                        'label'      => 'Tabs List',
                        'type'       => 'repeater',
                        'sub_fields' => [
                            ['field_name' => 'tab_title', 'field_label' => 'Tab Title', 'field_type' => 'text'],
                            ['field_name' => 'tab_heading', 'field_label' => 'Tab Content Heading', 'field_type' => 'text'],
                            ['field_name' => 'tab_content', 'field_label' => 'Tab Content', 'field_type' => 'textarea'],
                        ],
                    ],
                ],
            ],

            // ============================================================
            // SECTION 10: CTA SECTION
            // Blade: frontend/pages/sections/cta.blade.php
            // ============================================================
            [
                'name' => 'CTA Section',
                'slug' => 'cta-section',
                'fields' => [
                    [
                        'name'  => 'heading',
                        'label' => 'Heading',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'description',
                        'label' => 'Description',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'btn_text',
                        'label' => 'Button Text',
                        'type'  => 'text',
                    ],
                    [
                        'name'  => 'btn_link',
                        'label' => 'Button Link',
                        'type'  => 'text',
                    ],
                ],
            ],

            // ============================================================
            // SECTION 11: BLOG SECTION
            // Blade: frontend/pages/sections/blog.blade.php
            // ============================================================
            [
                'name' => 'Blog Section',
                'slug' => 'blog-section',
                'fields' => [
                    [
                        'name'  => 'heading',
                        'label' => 'Heading',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'btn_text',
                        'label' => 'Button Text',
                        'type'  => 'text',
                    ],
                    [
                        'name'  => 'btn_link',
                        'label' => 'Button Link',
                        'type'  => 'text',
                    ],
                    [
                        'name'       => 'blogs',
                        'label'      => 'Blogs',
                        'type'       => 'repeater',
                        'sub_fields' => [
                            ['field_name' => 'title', 'field_label' => 'Title', 'field_type' => 'text'],
                            ['field_name' => 'link', 'field_label' => 'Link', 'field_type' => 'text'],
                            ['field_name' => 'image', 'field_label' => 'Image', 'field_type' => 'file'],
                            ['field_name' => 'excerpt', 'field_label' => 'Excerpt', 'field_type' => 'textarea'],
                            ['field_name' => 'author_name', 'field_label' => 'Author Name', 'field_type' => 'text'],
                            ['field_name' => 'author_avatar', 'field_label' => 'Author Avatar', 'field_type' => 'file'],
                            ['field_name' => 'date', 'field_label' => 'Date & Read Time (e.g. Feb 26 • 4 min)', 'field_type' => 'text'],
                        ],
                    ],
                ],
            ],

            // ============================================================
            // SECTION 12: HERO STOP CHASING SECTION
            // Blade: frontend/pages/sections/hero-stope-chase-section.blade.php
            // ============================================================
            [
                'name' => 'Hero Stop Chasing Section',
                'slug' => 'hero-stope-chase-section',
                'fields' => [
                    [
                        'name'  => 'bg_image',
                        'label' => 'Background Image',
                        'type'  => 'file',
                    ],
                    [
                        'name'  => 'badge',
                        'label' => 'Badge Text (e.g. Next-Gen Search Intelligence)',
                        'type'  => 'text',
                    ],
                    [
                        'name'  => 'heading',
                        'label' => 'Main Heading (H1)',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'description',
                        'label' => 'Hero Description',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'       => 'features',
                        'label'      => 'Feature Cards',
                        'type'       => 'repeater',
                        'sub_fields' => [
                            ['field_name' => 'label', 'field_label' => 'Feature Label', 'field_type' => 'text'],
                            ['field_name' => 'icon', 'field_label' => 'Icon ID (e.g. file-text-stroke-rounded)', 'field_type' => 'text'],
                        ],
                    ],
                ],
            ],

            // ============================================================
            // SECTION 13: SERVICES GRID V1 SECTION
            // Blade: frontend/pages/sections/services-grid-v1-section.blade.php
            // ============================================================
            [
                'name' => 'Services Grid V1 Section',
                'slug' => 'services-grid-v1-section',
                'fields' => [
                    [
                        'name'  => 'badge',
                        'label' => 'Badge Text (e.g. SEO Agency UK)',
                        'type'  => 'text',
                    ],
                    [
                        'name'  => 'heading',
                        'label' => 'Main Heading',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'description',
                        'label' => 'Lead Description',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'       => 'services',
                        'label'      => 'Service Cards',
                        'type'       => 'repeater',
                        'sub_fields' => [
                            ['field_name' => 'title', 'field_label' => 'Service Title', 'field_type' => 'text'],
                            ['field_name' => 'description', 'field_label' => 'Description', 'field_type' => 'textarea'],
                            ['field_name' => 'image', 'field_label' => 'Card Image', 'field_type' => 'file'],
                            ['field_name' => 'icon', 'field_label' => 'Icon Symbol ID (e.g. sparkles-stroke-rounded)', 'field_type' => 'text'],
                            ['field_name' => 'link_text', 'field_label' => 'Link Text', 'field_type' => 'text'],
                            ['field_name' => 'link_url', 'field_label' => 'Link URL', 'field_type' => 'text'],
                        ],
                    ],
                    [
                        'name'  => 'hubs_label',
                        'label' => 'Hubs Label Text',
                        'type'  => 'text',
                    ],
                    [
                        'name'       => 'hubs',
                        'label'      => 'Hub Cities List',
                        'type'       => 'repeater',
                        'sub_fields' => [
                            ['field_name' => 'name', 'field_label' => 'City Name', 'field_type' => 'text'],
                        ],
                    ],
                ],
            ],

            // ============================================================
            // SECTION 14: AI ORBIT V1 SECTION
            // Blade: frontend/pages/sections/ai-orbit-v1-section.blade.php
            // ============================================================
            [
                'name' => 'AI Orbit V1 Section',
                'slug' => 'ai-orbit-v1-section',
                'fields' => [
                    [
                        'name'  => 'badge',
                        'label' => 'Badge Text (e.g. Future-Ready Search)',
                        'type'  => 'text',
                    ],
                    [
                        'name'  => 'heading',
                        'label' => 'Main Heading',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'lead_text',
                        'label' => 'Lead Text (First Paragraph)',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'paragraph_2',
                        'label' => 'Second Paragraph',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'stat_number',
                        'label' => 'Stat Number (e.g. 80%)',
                        'type'  => 'text',
                    ],
                    [
                        'name'  => 'stat_strong',
                        'label' => 'Stat Highlighted Text (e.g. of Consumers read AI summaries)',
                        'type'  => 'text',
                    ],
                    [
                        'name'  => 'stat_span',
                        'label' => 'Stat Subtext',
                        'type'  => 'text',
                    ],
                    [
                        'name'  => 'paragraph_3',
                        'label' => 'Third Paragraph (Below Stat)',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'summary_box',
                        'label' => 'Summary Box Text',
                        'type'  => 'textarea',
                    ],
                    [
                        'name'  => 'btn_text',
                        'label' => 'Button Text',
                        'type'  => 'text',
                    ],
                    [
                        'name'  => 'btn_link',
                        'label' => 'Button Link / URL',
                        'type'  => 'text',
                    ],
                ],
            ],

        ];

        // ---------------------------------------------------------------
        // Loop: Har section create karo aur uske fields seed karo
        // ---------------------------------------------------------------
        foreach ($sectionsToCreate as $data) {

            $section = SectionTemplate::updateOrCreate(
                ['slug' => $data['slug']],
                ['name' => $data['name']]
            );

            // Remove fields that are no longer in the seeder data
            $currentFieldNames = array_column($data['fields'], 'name');
            SectionField::where('section_template_id', $section->id)
                        ->whereNotIn('field_name', $currentFieldNames)
                        ->delete();

            foreach ($data['fields'] as $fIndex => $field) {
                SectionField::updateOrCreate(
                    [
                        'section_template_id' => $section->id,
                        'field_name'          => $field['name'],
                    ],
                    [
                        'field_label' => $field['label'],
                        'field_type'  => $field['type'],
                        'is_required' => 0,
                        'sort_order'  => $fIndex,
                        'sub_fields'  => isset($field['sub_fields']) ? $field['sub_fields'] : null,
                    ]
                );
            }

            $this->command->info("Seeded: [{$data['slug']}] -- " . count($data['fields']) . " fields");
        }

        $this->command->info('Done! Total sections seeded: ' . count($sectionsToCreate));
    }
}