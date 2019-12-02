<?php

namespace frontend\modules\api\controllers;

use common\models\User;
use frontend\modules\api\models\Project;
use yii\rest\ActiveController;


/**
 * User controller for the `api` module
 */
class UserController extends ActiveController
{

    public $modelClass = User::class;
}
