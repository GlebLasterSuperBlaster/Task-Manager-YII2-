<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var $search \backend\controllers\ProjectController */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'active')->dropDownList([\common\models\Project::STATUSE_LABELS]) ?>
     <!--https://github.com/unclead/yii2-multiple-input-->
    <?= $form->field($model, \common\models\Project::RELATION_PROJECT_USERS)->widget(\unclead\multipleinput\MultipleInput::className(), [
    'id' => 'project-users-widget',
    'max' => 10,
    'min' => 0,
    'addButtonPosition' => \unclead\multipleinput\MultipleInput::POS_HEADER,
    'columns' => [
        [
            'name'  => 'user_id',
            'type'  => \unclead\multipleinput\MultipleInputColumn::TYPE_STATIC,
            'title' => 'Special Products',
            'value' => function ($data){
             return $data ? Html::a($data->user->username,['user/view','id' => $data->user_id]): ' ';
            }
            ],

        [
            'name'  => 'project_id',
            'type'  => 'hiddenInput',
            'defaultValue' => $model->id
        ],
        [
            'name' => 'user_id',
            'type' => 'dropDownList',
            'title' => 'User',
            'items' => $search
            ],
               [
            'name' => 'role',
            'type' => 'dropDownList',
            'title' => 'Role',
            'items' => \common\models\Project_user::ROLES_LABELS
            ]


    ]
]); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
