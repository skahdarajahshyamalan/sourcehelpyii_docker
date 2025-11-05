<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,
                    'js' => [
                        'https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js',
                    ],
                ],
                'yii\bootstrap4\BootstrapAsset' => [
                    'sourcePath' => null,
                    'css' => [
                        'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css',
                    ],
                ],
                'yii\bootstrap4\BootstrapPluginAsset' => [
                    'sourcePath' => null,
                    'js' => [
                        'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js',
                    ],
                    'depends' => [
                        'yii\web\JqueryAsset',
                    ],
                ],
            ],
        ],
    ],
];
