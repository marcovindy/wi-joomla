<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1622634313,
    'checksum' => 'b8f941471083d49b615cceddeff4efa3',
    'files' => [
        'templates/g5_hydrogen/custom/config/9' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/9/index.yaml',
                'modified' => 1622634196
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/9/layout.yaml',
                'modified' => 1622634196
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
            ]
        ],
        'index' => [
            'name' => '9',
            'timestamp' => 1622634196,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1622634196
            ],
            'positions' => [
                'header' => 'Header',
                'breadcrumbs' => 'Breadcrumbs',
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-3451' => 'Logo',
                    'logo-1903' => 'Logo'
                ],
                'position' => [
                    'position-header' => 'Header',
                    'position-breadcrumbs' => 'Breadcrumbs',
                    'position-footer' => 'Footer',
                    'position-position-3877' => 'Header',
                    'position-position-2594' => 'Breadcrumbs',
                    'position-position-5178' => 'Footer'
                ],
                'menu' => [
                    'menu-2224' => 'Menu',
                    'menu-1193' => 'Menu'
                ],
                'messages' => [
                    'system-messages-7103' => 'System Messages',
                    'system-messages-6054' => 'System Messages'
                ],
                'content' => [
                    'system-content-7645' => 'Page Content',
                    'system-content-2753' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-1387' => 'Copyright',
                    'copyright-6796' => 'Copyright'
                ],
                'spacer' => [
                    'spacer-8553' => 'Spacer',
                    'spacer-7010' => 'Spacer'
                ],
                'branding' => [
                    'branding-7727' => 'Branding',
                    'branding-1290' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-1756' => 'Mobile-menu',
                    'mobile-menu-1668' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'header' => 'header',
                    'logo-3451' => 'logo-3451',
                    'position-header' => 'position-header',
                    'navigation' => 'navigation',
                    'menu-2224' => 'menu-2224',
                    'main' => 'main',
                    'position-breadcrumbs' => 'position-breadcrumbs',
                    'system-messages-7103' => 'system-messages-7103',
                    'system-content-7645' => 'system-content-7645',
                    'footer' => 'footer',
                    'position-footer' => 'position-footer',
                    'copyright-1387' => 'copyright-1387',
                    'spacer-8553' => 'spacer-8553',
                    'branding-7727' => 'branding-7727',
                    'offcanvas' => 'offcanvas',
                    'mobile-menu-1756' => 'mobile-menu-1756',
                    'logo-1903' => 'logo-3451',
                    'position-position-3877' => 'position-header',
                    'menu-1193' => 'menu-2224',
                    'position-position-2594' => 'position-breadcrumbs',
                    'system-messages-6054' => 'system-messages-7103',
                    'system-content-2753' => 'system-content-7645',
                    'position-position-5178' => 'position-footer',
                    'copyright-6796' => 'copyright-1387',
                    'spacer-7010' => 'spacer-8553',
                    'branding-1290' => 'branding-7727',
                    'mobile-menu-1668' => 'mobile-menu-1756'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1622634196
            ],
            'layout' => [
                'header' => [
                    
                ],
                'navigation' => [
                    
                ],
                'main' => [
                    
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'header' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'main' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'position-header' => [
                    'attributes' => [
                        'key' => 'header'
                    ]
                ],
                'position-breadcrumbs' => [
                    'attributes' => [
                        'key' => 'breadcrumbs'
                    ]
                ],
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ]
            ]
        ]
    ]
];
