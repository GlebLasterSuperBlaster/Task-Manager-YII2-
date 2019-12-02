<?php
use yii\helpers\Html;
/** var $this  yii\web\views
 *  var $user common\models\User
 *  var $project common\models\Project
 *  var $role string
 */

?>

<div>
    <p>
        Hello <?= Html::encode($user->username) ?>,
    </p>
    <p>
        in project <?= $project->title ?> you have a role as <?= $role ?>
    </p>

</div>
