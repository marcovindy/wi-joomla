<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/wi-joomla/media/gantry5/engines/nucleus/admin/blueprints/layout/inheritance/position.yaml',
    'modified' => 1622706287,
    'data' => [
        'name' => 'Inheritance',
        'description' => 'Position inheritance tab',
        'type' => 'position.inheritance',
        'form' => [
            'fields' => [
                'mode' => [
                    'type' => 'input.radios',
                    'label' => 'Mode',
                    'description' => 'Whether to clone or inherit the particle properties',
                    'default' => 'inherit',
                    'options' => [
                        'clone' => 'Clone',
                        'inherit' => 'Inherit'
                    ]
                ],
                'outline' => [
                    'type' => 'gantry.outlines',
                    'label' => 'Outline',
                    'description' => 'Outline to inherit from.',
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'options' => [
                        '' => 'No Inheritance'
                    ]
                ],
                'particle' => [
                    'type' => 'gantry.particles',
                    'id' => 'g-inherit-particle',
                    'outline_field' => 'outline',
                    'label' => 'Position Instance',
                    'description' => 'Position to inherit from'
                ],
                'include' => [
                    'type' => 'input.multicheckbox',
                    'label' => 'Replace',
                    'description' => 'Which parts of the Position to inherit?',
                    'options' => [
                        'attributes' => 'Position Attributes',
                        'block' => 'Block Attributes'
                    ]
                ]
            ]
        ]
    ]
];
