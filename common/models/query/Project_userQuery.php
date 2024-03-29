<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Project_user]].
 *
 * @see \common\models\Project_user
 */
class Project_userQuery extends \yii\db\ActiveQuery
{
    public function byUser ($userId, $role = null) {
    $this->andWhere(['user_id' => $userId]);
    if ($role){
        $this->andWhere(['role' => $role]);
    }
    return $this;
}
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Project_user[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Project_user|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
