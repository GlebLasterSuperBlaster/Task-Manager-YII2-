<?php
use yii\helpers\Html;
/** var $this  yii\web\views
 *  var $user common\models\User
 *  var $project common\models\Project
 *  var $role string
 */

?>


        Hello <?= Html::encode($user->username) ?>,

        in project <?= $project->title ?> you have a role as <?= $role ?>

