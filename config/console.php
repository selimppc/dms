<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

return [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'preload' => array('log'),
    'controllerPath' => dirname(__DIR__) . '/commands',
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'extensions' => require(__DIR__ . '/../vendor/yiisoft/extensions.php'),
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

        // Database
        'db' => $db,

        'log' => [
            'targets' => [
               [
                    'class' => 'yii\log\FileTarget',
                    'levels' => array('error', 'warning'),
                ],
            ],
        ],
    ],
    'params' => $params,
];
