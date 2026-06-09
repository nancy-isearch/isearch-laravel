<?php

return [
    'hero_v1' => [
        'fields' => [
            [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Title',
                'required' => true,
            ],
            [
                'type' => 'textarea',
                'name' => 'subtitle',
                'label' => 'Subtitle',
            ],
            [
                'type' => 'image',
                'name' => 'hero_image',
                'label' => 'Hero Image',
            ],
        ],
    ],

    'faq' => [
        'name' => 'FAQ',
        'view' => 'sections.faq.faq-v1',
        'fields' => [
            [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Title',
            ],
            [
                'type' => 'repeater',
                'name' => 'items',

                'label' => 'FAQ Items',

                'fields' => [

                    [
                        'type' => 'text',
                        'name' => 'question',
                        'label' => 'Question',
                    ],

                    [
                        'type' => 'textarea',
                        'name' => 'answer',
                        'label' => 'Answer',
                    ],

                ],

            ],

        ],

    ],

    'cta' => [

        'name' => 'CTA',

        'view' => 'sections.cta.cta-v1',

        'fields' => [

            [
                'type' => 'text',
                'name' => 'title',
                'label' => 'CTA Title',
            ],

            [
                'type' => 'textarea',
                'name' => 'subtitle',
                'label' => 'CTA Subtitle',
            ],

            [
                'type' => 'button',
                'name' => 'button',
                'label' => 'Button',
            ],

        ],

    ],

];
