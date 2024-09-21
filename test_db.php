<?php

require __DIR__ . '/vendor/autoload.php'; 
require __DIR__ . '/vendor/yiisoft/yii2/Yii.php'; 

$config = [
    'id' => 'test-app',
    'basePath' => __DIR__,
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dns' => 'mysql:host=localhost;dbname=cothinkr_db',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];

$application = new yii\web\Application($config);

try {
    $db = $application->db;
    $db->open();
    echo "Conexión exitosa!";
} catch (\yii\db\Exception $e) {
    echo "Error al conectar: " . $e->getMessage();
}
