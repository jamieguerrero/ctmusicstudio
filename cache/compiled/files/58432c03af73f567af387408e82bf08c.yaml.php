<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/ctms-grav/user/config/site.yaml',
    'modified' => 1487477114,
    'data' => [
        'title' => 'CT Music Studio',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Chynna Tolibas',
            'email' => 'chynna@ctmusicstudio.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Lessons, Accompaniment, Event Services provided by CT Music Studio based in the GTA',
            'keywords' => 'piano lessons, piano, music, lessons, brampton, mississauga, toronto, gta, accompaniment, events',
            'viewport' => 'width=device-width,initial-scale=1.0,maximum-scale=1.0'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
