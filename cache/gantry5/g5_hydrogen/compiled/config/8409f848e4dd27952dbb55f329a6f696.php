<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1625131062,
    'checksum' => 'd8bd2c30edee05fa78546d727f77ec45',
    'files' => [
        'templates/g5_hydrogen/custom/config/10' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/10/index.yaml',
                'modified' => 1625129323
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/10/layout.yaml',
                'modified' => 1625129323
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/10/styles.yaml',
                'modified' => 1622715364
            ]
        ]
    ],
    'data' => [
        'index' => [
            'name' => '10',
            'timestamp' => 1625129323,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1622634196
            ],
            'positions' => [
                'showcase' => 'Module Position',
                'content-top' => 'Module Position',
                'content-bottom' => 'Module Position',
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'showcase' => 'Showcase',
                'feature' => 'Feature',
                'subfeature' => 'Subfeature',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'menu' => [
                    'menu-8272' => 'Menu'
                ],
                'position' => [
                    'position-position-4747' => 'Module Position',
                    'position-position-6141' => 'Module Position',
                    'position-position-5433' => 'Module Position',
                    'position-footer' => 'Footer'
                ],
                'messages' => [
                    'system-messages-4475' => 'System Messages'
                ],
                'content' => [
                    'system-content-9502' => 'Page Content'
                ],
                'sample' => [
                    'sample-3' => 'Key Features'
                ],
                'copyright' => [
                    'copyright-5918' => 'Copyright'
                ],
                'social' => [
                    'social-3270' => 'Social'
                ],
                'branding' => [
                    'branding-1212' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-2054' => 'Mobile Menu'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1622634196
            ],
            'layout' => [
                '/header/' => [
                    
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'menu-8272'
                    ]
                ],
                '/showcase/' => [
                    0 => [
                        0 => 'position-position-4747'
                    ]
                ],
                '/feature/' => [
                    
                ],
                '/main/' => [
                    0 => [
                        0 => 'system-messages-4475'
                    ],
                    1 => [
                        0 => 'position-position-6141'
                    ],
                    2 => [
                        0 => 'system-content-9502'
                    ],
                    3 => [
                        0 => 'position-position-5433'
                    ]
                ],
                '/subfeature/' => [
                    0 => [
                        0 => 'sample-3'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-footer'
                    ],
                    1 => [
                        0 => 'copyright-5918 33.3',
                        1 => 'social-3270 33.3',
                        2 => 'branding-1212 33.3'
                    ]
                ],
                'offcanvas' => [
                    0 => [
                        0 => 'mobile-menu-2054'
                    ]
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'subfeature' => [
                    'type' => 'section',
                    'attributes' => [
                        'class' => 'flush',
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ]
            ],
            'content' => [
                'position-position-4747' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'showcase'
                    ]
                ],
                'position-position-6141' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'content-top'
                    ]
                ],
                'position-position-5433' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'content-bottom'
                    ]
                ],
                'sample-3' => [
                    'title' => 'Key Features',
                    'attributes' => [
                        'headline' => 'Key Features',
                        'description' => '<p>Gantry 5 is packed full of features created to empower the development of designs into fully functional layouts with the absolute minimum effort and fuss</p>',
                        'samples' => [
                            0 => [
                                'icon' => 'fa fa-code',
                                'subtitle' => '',
                                'description' => '<p>Gantry 5 leverages the power of <a href="http://twig.sensiolabs.org/">Twig</a> to make creating powerful, dynamic themes quick and easy.</p>',
                                'title' => 'Twig Templating'
                            ],
                            1 => [
                                'icon' => 'fa fa-newspaper-o',
                                'subtitle' => '',
                                'description' => '<p>Drag-and-drop functionality gives you the power to place content blocks, resize them, and configure their unique settings in seconds.</p>',
                                'title' => 'Layout Manager'
                            ],
                            2 => [
                                'icon' => 'fa fa-cubes',
                                'subtitle' => '',
                                'description' => '<p>Create, configure, and manage content blocks as well as special features and functionality with the powerful particle system.</p>',
                                'title' => 'Particles System'
                            ]
                        ]
                    ]
                ],
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ],
                'social-3270' => [
                    'attributes' => [
                        'css' => [
                            'class' => 'social-items'
                        ],
                        'items' => [
                            0 => [
                                'icon' => 'fa fa-twitter',
                                'text' => 'Twitter',
                                'link' => 'http://twitter.com/rockettheme',
                                'name' => 'Twitter'
                            ],
                            1 => [
                                'icon' => 'fa fa-facebook',
                                'text' => 'Facebook',
                                'link' => 'http://facebook.com/rockettheme',
                                'name' => 'Facebook'
                            ],
                            2 => [
                                'icon' => 'fa fa-google',
                                'text' => 'Google',
                                'link' => 'http://plus.google.com/+rockettheme',
                                'name' => 'Google'
                            ],
                            3 => [
                                'icon' => 'fa fa-rss',
                                'text' => 'RSS',
                                'link' => 'http://www.rockettheme.com/product-updates?rss',
                                'name' => 'RSS'
                            ]
                        ]
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'branding-1212' => [
                    'block' => [
                        'variations' => 'align-right'
                    ]
                ],
                'mobile-menu-2054' => [
                    'title' => 'Mobile Menu'
                ]
            ]
        ],
        'styles' => [
            'preset' => 'preset1',
            'accent' => [
                'color-1' => '#383838'
            ],
            'header' => [
                'background' => '#383838'
            ],
            'navigation' => [
                'background' => '#383838'
            ]
        ]
    ]
];
