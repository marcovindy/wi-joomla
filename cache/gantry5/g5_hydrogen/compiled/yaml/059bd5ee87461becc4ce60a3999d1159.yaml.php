<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\wi-joomla/media/gantry5/engines/nucleus/particles/social.yaml',
    'modified' => 1622706287,
    'data' => [
        'name' => 'Social',
        'description' => 'Display social buttons.',
        'type' => 'particle',
        'icon' => 'fa-share-alt',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable social particles.',
                    'default' => true
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.',
                    'default' => 'social'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'target' => [
                    'type' => 'select.select',
                    'label' => 'Target',
                    'description' => 'Target browser window when item is clicked.',
                    'placeholder' => 'Select...',
                    'default' => '',
                    'options' => [
                        '' => 'None',
                        '_self' => 'Self',
                        '_parent' => 'Parent',
                        '_top' => 'Top',
                        '_blank' => 'New Window'
                    ]
                ],
                'display' => [
                    'type' => 'input.radios',
                    'label' => 'Display',
                    'description' => 'How to display the Social Icons',
                    'default' => 'both',
                    'options' => [
                        'icons_only' => 'Icons Only',
                        'text_only' => 'Text Only',
                        'both' => 'Both'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Social Items',
                    'description' => 'Create each social item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.name' => [
                            'type' => 'input.text',
                            'label' => 'Name',
                            'skip' => true
                        ],
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.text' => [
                            'type' => 'input.text',
                            'label' => 'Text'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
