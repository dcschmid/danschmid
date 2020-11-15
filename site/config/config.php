<?php
return [
    'install' => true,
    'debug'  => true,
    'home' => 'blog',
    'routes' => [
        [
            'pattern' => 'blog/(:any)',
            'action' => function ($tag) {
                return Page::factory([
                    'slug'     => $tag,
                    'template' => 'tag',
                    'model'    => 'tag',
                    'content'  => [
                        'title' => 'Results for ' . ucfirst($tag),
                    ]
                ]);
            }

        ]
    ]
];
