<?php

$params = require(__DIR__ . '/params.php');

$basePath =  dirname(__DIR__);
$webroot = dirname($basePath);

$config = [
    'id' => 'app',
    'basePath' => $basePath,
    'bootstrap' => ['log'],
    'language' => 'fa',
    'timezone' => 'Asia/Tehran',
    'runtimePath' => $webroot . '/runtime',
    'vendorPath' => $webroot . '/vendor',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'OviOe6y9uHGYKYBdxlTs',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
        ],
        'urlManager' => [
            'rules' => [
                '<controller:\w+>/view/<slug:[\w-]+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/cat/<slug:[\w-]+>' => '<controller>/cat',
            ],
        ],
        
        'assetManager' => [
            // uncomment the following line if you want to auto update your assets (unix hosting only)
            //'linkAssets' => true,
            'forceCopy' => true,
            
        ],
        'i18n' => [
            'translations' => [
                'easyii*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                    'basePath' => '@app/messages',
                    
                ]
            ],
        ],
        'formatter' => [
            'class' => 'app\components\TfbFormatter',
            'locale' => 'fa_IR@calendar=persian',
            'calendar' => IntlDateFormatter::TRADITIONAL,
            'dateFormat' => 'y EEEE dd MMMM'
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
    
    $config['components']['db']['enableSchemaCache'] = false;
}

$uri = $_SERVER['REQUEST_URI'];

$isAdminPanel = preg_match("~^\/admin~", $uri);

if($isAdminPanel){
    $bundles = [
            'yii\web\JqueryAsset' => [
                'js' => [YII_DEBUG ? 'jquery.js' : 'jquery.min.js'],
            ],
            'yii\bootstrap\BootstrapAsset' => [
                'css' => [YII_DEBUG ? 'css/bootstrap.css' : 'css/bootstrap.min.css'],
            ],
            'yii\bootstrap\BootstrapPluginAsset' => [
                'js' => [YII_DEBUG ? 'js/bootstrap.js' : 'js/bootstrap.min.js'],
            ],
        ];
}else{
    $bundles = [
        'yii\web\JqueryAsset' => false,
        'yii\bootstrap\BootstrapAsset' => false,
        'yii\bootstrap\BootstrapPluginAsset' => false,
    ];
}

$config['components']['assetManager']['bundles'] = $bundles;

return array_merge_recursive($config, require($webroot . '/vendor/noumo/easyii/config/easyii.php'));