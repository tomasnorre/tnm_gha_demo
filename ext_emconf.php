<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'TNM GitHub Action Demo Extension',
    'description' => 'TYPO3 Demo Extension for testing GitHub Actions',
    'category' => 'module',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Tomas Norre Mikkelsen',
    'author_email' => '',
    'author_company' => '',
    'version' => '0.0.10',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ]
];