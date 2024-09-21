<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/main-local.php';

$config = [
    'id' => 'app-common',
    'components' => $db['components'],
    'params' => $params,
];

return $config;

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
];
