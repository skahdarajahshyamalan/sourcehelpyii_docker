<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'name' => 'sourcehelp',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'google' => [
                    'class' => 'yii\authclient\clients\Google',
                    'clientId' => '596677034723-bfr77uouvkn5afaim3enin0gcgpbd8s7.apps.googleusercontent.com',
                    'clientSecret' => 'Pue48ILMyXlvjWKIaaaRhocq',
                    'returnUrl' => 'http://shyamalancode.lk/site/auth?authclient=google'
                ],
                 'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                     'clientId' => '773037700239128',
                     'clientSecret' => 'f2dab507ab0c6629c786eed0a3d3d3c9',
                     'returnUrl' => 'http://shyamalancode.lk/site/auth?authclient=facebook'
                 ],
                 'github' => [
                    'class' => 'yii\authclient\clients\GitHub',
                    'clientId' => '4fee7a93510938c446c5',
                    'clientSecret' => '3bf549fe7f76c1fd09e43d5f529f6dd121646175 ',
                    'returnUrl' => 'http://shyamalancode.lk/site/auth?authclient=github'
                ],
                // etc.
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        
    ],
    'params' => $params,
];
