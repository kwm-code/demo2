<?php

/**
 * Extension Manager/Repository config file for ext "demo".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Demo',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Ringer\\Demo\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Georg Ringer',
    'author_email' => 'mail@ringer.it',
    'author_company' => 'Ringer',
    'version' => '1.0.0',
];
