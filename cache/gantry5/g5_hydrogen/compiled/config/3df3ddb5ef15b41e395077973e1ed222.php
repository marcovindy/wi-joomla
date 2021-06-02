<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1622641354,
    'checksum' => '4c9cf05de9f814f86d196a6a06bf59e8',
    'files' => [
        'templates/g5_hydrogen/custom/config/10' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/10/index.yaml',
                'modified' => 1622641352
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/10/layout.yaml',
                'modified' => 1622641352
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/10/styles.yaml',
                'modified' => 1622634274
            ]
        ],
        'templates/g5_hydrogen/custom/config/default' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/index.yaml',
                'modified' => 1622634196
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/layout.yaml',
                'modified' => 1622634196
            ]
        ],
        'templates/g5_hydrogen/config/default' => [
            'particles/logo' => [
                'file' => 'templates/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1622634196
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'sample' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => true,
                'url' => '',
                'image' => 'gantry-assets://images/gantry5-logo.png',
                'text' => 'Gantry 5',
                'class' => 'gantry-logo'
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0,
                'forceTarget' => 0
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'social'
                ],
                'target' => '',
                'display' => 'both'
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'totop'
                ]
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text',
                            'prepare' => false
                        ],
                        'edit' => false,
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'messages' => [
                'enabled' => true
            ],
            'module' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry'
                ],
                'layout' => [
                    'sections' => 0
                ]
            ],
            'fontawesome' => [
                'enable' => 1
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#439a86',
                'color-2' => '#8f4dae'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#666666',
                'body-font' => 'roboto, sans-serif',
                'heading-font' => 'roboto, sans-serif'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'feature' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'footer' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'header' => [
                'background' => '#2a816d',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade',
                'hide-on-mobile' => 0
            ],
            'navigation' => [
                'background' => '#439a86',
                'text-color' => '#ffffff',
                'overlay' => 'rgba(0, 0, 0, 0.4)'
            ],
            'offcanvas' => [
                'background' => '#354d59',
                'text-color' => '#ffffff',
                'width' => '17rem',
                'toggle-color' => '#ffffff',
                'toggle-visibility' => 1
            ],
            'showcase' => [
                'background' => '#354d59',
                'image' => '',
                'text-color' => '#ffffff'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#666666'
            ],
            'preset' => 'preset1'
        ],
        'index' => [
            'name' => '10',
            'timestamp' => 1622641352,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1622634196
            ],
            'positions' => [
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
                'messages' => [
                    'system-messages-4475' => 'System Messages'
                ],
                'content' => [
                    'system-content-9502' => 'Page Content'
                ],
                'sample' => [
                    'sample-3' => 'Key Features'
                ],
                'position' => [
                    'position-footer' => 'Footer'
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
                    
                ],
                '/feature/' => [
                    
                ],
                '/main/' => [
                    0 => [
                        0 => 'system-messages-4475'
                    ],
                    1 => [
                        0 => 'system-content-9502'
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
        ]
    ]
];
