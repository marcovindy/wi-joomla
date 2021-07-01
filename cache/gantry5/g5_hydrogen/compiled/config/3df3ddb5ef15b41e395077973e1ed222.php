<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1625144408,
    'checksum' => 'a5bde1182de5f25e460763daec109f51',
    'files' => [
        'templates/g5_hydrogen/custom/config/10' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/10/index.yaml',
                'modified' => 1625144407
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/10/layout.yaml',
                'modified' => 1625144407
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/10/styles.yaml',
                'modified' => 1622715364
            ]
        ],
        'templates/g5_hydrogen/custom/config/default' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/index.yaml',
                'modified' => 1625128593
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/layout.yaml',
                'modified' => 1622706291
            ],
            'page/assets' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/page/assets.yaml',
                'modified' => 1625141305
            ],
            'page/body' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/page/body.yaml',
                'modified' => 1625141305
            ],
            'page/fontawesome' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/page/fontawesome.yaml',
                'modified' => 1625141305
            ],
            'page/head' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/page/head.yaml',
                'modified' => 1625141305
            ]
        ],
        'templates/g5_hydrogen/config/default' => [
            'particles/logo' => [
                'file' => 'templates/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1622706291
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
                    'class' => 'gantry',
                    'id' => '',
                    'extra' => [
                        
                    ]
                ],
                'layout' => [
                    'sections' => '0'
                ],
                'body_top' => '',
                'body_bottom' => ''
            ],
            'fontawesome' => [
                'enable' => '1'
            ],
            'assets' => [
                'favicon' => '',
                'touchicon' => '',
                'css' => [
                    
                ],
                'javascript' => [
                    
                ]
            ],
            'head' => [
                'meta' => [
                    
                ],
                'head_bottom' => '<script src="media/system/js/parallax.js"></script>
<script src="media/system/js/parallax.min.js"></script>',
                'atoms' => [
                    
                ]
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#383838',
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
                'background' => '#383838',
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
                'background' => '#383838',
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
            'timestamp' => 1625144407,
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
                    
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-footer'
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
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ],
                'mobile-menu-2054' => [
                    'title' => 'Mobile Menu'
                ]
            ]
        ]
    ]
];
