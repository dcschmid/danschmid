<?php
return [
    'install' => true,
    'debug'  => true,
    'home' => 'blog',
    'languages' => true,
    'sylvainjule.matomo.url' => 'https://matomo.danschmid.de',
    'sylvainjule.matomo.id'  => '1',
    'sylvainjule.matomo.token' => 'dfc1a0207f2f1f84ebc7f4756c5698ff',
    'sylvainjule.matomo.active'         => true,
    'sylvainjule.matomo.trackUsers'     => false,
    'sylvainjule.matomo.disableCookies' => true,
    'thumbs' => [
        'srcsets' => [
            'default' => [320, 576, 768, 992, 1200],
        ],
    ],
    'kirby-extended.blurry-placeholder' => [
        'pixel-target' => 75,
        'srcset' => [
            'enable' => true,
            'preset' => 'default'
        ]
    ],
    'kirby3-webp' => true,
    'afbora.kirby-minify-html.enabled' => true,
    'afbora.kirby-minify-html.options' => [
        'doOptimizeViaHtmlDomParser' => true, // set true/false or remove line to default
        'doRemoveSpacesBetweenTags'  => false // set true/false or remove line to default
    ],
    'sgkirby.commentions.templatesWithComments' => ['article'],
    'sgkirby.commentions.templatesWithWebmentions' => ['article'],
    'sgkirby.commentions.secret' => 'Commentions2020',
    'pedroborges.meta-tags.templates' => function ($page, $site) {
        return [
            'blog' => [
                'title' => $site->title(),
                'meta' => [
                    'description' => $site->description()
                ],
                'link' => [
                    'canonical' => $page->url()
                ],
                'og' => [
                    'title' => $page->isHomePage()
                        ? $site->title()
                        : $page->title(),
                    'type' => 'website',
                    'site_name' => $site->title(),
                    'url' => $page->url()
                ]
            ],
            'article' => [
                'title' => $page->title(),
                'meta' => [
                    'description' => $page->metadescription(),
                    'robots' => $page->metatags(),
                    'author' => ($page->author() !== null && $page->author()->toUser() !== null) ? $page->author()->toUser()->name() : '',
                    'article:published_time' => $page->date()->toDate('Y-m-d'),
                    'article:modified_time' => $page->modified('Y-m-d'),
                    'article:author' => ($page->author() !== null && $page->author()->toUser() !== null) ? $page->author()->toUser()->facebook() : '',
                ],
                'link' => [
                    'canonical' => $page->url()
                ],
                'og' => [
                    'title' => $page->title(),
                    'type' => 'article',
                    'site_name' => 'Danschmid',
                    'url' => $page->url(),
                    'image' => ($page->cover() !== null && $page->cover()->toFile() !== null) ? $page->cover()->toFile()->url() : '',
                    'article:published_time' => $page->date()->toDate('Y-m-d'),
                    'article:modified_time' => $page->modified('Y-m-d'),
                    'article:author' => ($page->author() !== null && $page->author()->toUser() !== null) ? $page->author()->toUser()->facebook() : '',
                ],
                'twitter' => [
                    'card' => 'summary_large_image',
                    'site' => '@dcschmid1',
                    'title' => $page->title(),
                    'description' => $page->metadescription(),
                    'image' => ($page->cover() !== null && $page->cover()->toFile() !== null) ? $page->cover()->toFile()->url() : '',
                ],
                'json-ld' => [
                    'NewsArticle' => [
                        'headline' => $page->title(),
                        'datePublished' => $page->date()->toDate('Y-m-d'),
                        'description' => $page->metadescription(),
                        'image' => [
                            '@type' => 'ImageObject',
                            'url' => ($page->cover() !== null && $page->cover()->toFile() !== null) ? $page->cover()->toFile()->url() : '',
                        ],
                        'author' => ($page->author() !== null && $page->author()->toUser() !== null) ? $page->author()->toUser()->name() : '',
                        'articleBody' => $page->text()->kirbytext(),
                    ]
                ]
            ]
        ];
    }
];
