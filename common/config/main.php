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
        'emailService' =>[
            'class' => common\services\EmailService::class,
        ],
        'projectService' => [
            'class' => common\services\ProjectService::class,

            'on '.common\services\ProjectService::EVENT_ASSIGN_ROLE =>
            function (common\services\AssignRoleEvent $e){
              $views = ['html' => 'assigneRole-html', 'text' => 'assigneRole-text'];
              $data = ['user' =>$e->user, 'project' =>$e->project, 'role' =>$e->role];
              Yii::$app->emailService->send($e->user->email, 'Change_Role', $views, $data);
            }
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages', // if advanced application, set @frontend/messages
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        //'main' => 'main.php',
                    ],
                ],
            ],
        ],

    ],
    'modules' => [
        'chat' => [
            'class' => 'common\modules\chat\Module',
        ],
        'comment' => [
            'class' => 'yii2mod\comments\Module',
        ],
    ],
];
