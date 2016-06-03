<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '5f-ixO36bWNI1bE8_WatoNdHa_BsiDGM',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
                [
                    //日志记录方式
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['info'],//日志等级
                    'logVars' =>[],//被收集记录的额外数据如 'logVars' => ['_GET', '_POST', '_FILES', '_COOKIE', '_SESSION','_SERVER'],
                    //指定日志策略
                    'categories' => ['MyLog'],
                    //指定日志目录
                    'logFile' => '@app/runtime/logs/Mylog/info.log',
                    'maxFileSize' => 1024 * 2,
                    'maxLogFiles' => 100,
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
//        'urlManager' => [
//            'enablePrettyUrl' => true,
//            'showScriptName' => false,
//            'enableStrictParsing' => true,
//            'rules' => [
//                '<controller:\w+>/<id:\d+>' => '<controller>/view',
//                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
//                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
//                ['class' => 'yii\rest\UrlRule', 'controller' => ['user', 'news']],
//            ],
//        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
