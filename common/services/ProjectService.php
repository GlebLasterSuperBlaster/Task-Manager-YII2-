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




class AssignRoleEvent extends Event{

    /**
     * @var Project $project
     * @var User $user
     * @var string $role
     */
    public $project;
    public $user;
    public $role;

    public function dump(){
        return ['project' => $this->project->id, 'user' => $this->user->id, 'role' =>$this->role];
    }
}



class ProjectService extends Component
{
    const EVENT_ASSIGN_ROLE = 'event_assign_role';
    public function assigneRole(Project $project, User $user, $role){
        $event = new  AssignRoleEvent();
        $event->project = $project;
        $event->user = $user;
        $event->role = $role;
        $this->trigger(self::EVENT_ASSIGN_ROLE, $event);
    }

    public function getRoles(Project $project, User $user){
        return $project->getProjectUsers()->byUser($user->id)->select('role')->column();
    }

    public function hasRole(Project $project, User $user, $role){
         return in_array($role, $this->getRoles($project, $user));
    }
}