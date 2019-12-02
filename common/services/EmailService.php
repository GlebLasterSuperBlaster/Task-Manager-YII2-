<?php
/**
 * Created by PhpStorm.
 * User: xiaom
 * Date: 05.06.2019
 * Time: 1:59
 */

namespace common\services;
use yii\base\Component;



class EmailService extends Component
{
    public function send($to, $subject, $viev, $data)
    {
       \Yii::$app->mailer
            ->compose($viev, $data)
            ->setTo($to)
            ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name. 'robot'])
            ->setSubject($subject)
            ->send();
    }
}