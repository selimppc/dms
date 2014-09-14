<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'extensions' => require(__DIR__ . '/../vendor/yiisoft/extensions.php'),
    'components' => [
        // UrlManager
        'urlManager' => [
            'class' => 'yii\web\UrlManager',

            // Disable index.php
            //'showScriptName' => false,

            // Disable r= routes
            'enablePrettyUrl' => true
        ],

        // Caching
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        // UserIdentity
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],

        //Error Handling
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'mail' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],

        //Logging
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

        // Database
        'db' => $db,
    ],

    // Modules
    'modules' => array(
        'debug' => 'yii\debug\Module',
        'gii'   => 'yii\gii\Module'
    ),

    // Extra Params if we want them
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';
    $config['modules']['gii'] = 'yii\gii\Module';



}

return $config;
