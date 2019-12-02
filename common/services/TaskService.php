<?php
/**
 * Created by PhpStorm.
 * User: xiaom
 * Date: 05.06.2019
 * Time: 1:18
 */

namespace common\services;

use common\models\Project;
use common\models\Project_user;
use common\models\User;
use yii\base\Event;
use  yii\base\Component;







class TaskService extends Component
{


    public function canManage(Project $project, User $user){
       $role= \Yii::$app->projectService->getRole($project,
            $user);
if ($role = 'manager'){
    return true;
}


    }


}