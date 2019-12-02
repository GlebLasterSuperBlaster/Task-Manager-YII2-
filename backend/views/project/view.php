<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;



/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'active',
            'creator_id',
            'updater_id',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>


<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'title',
        [
        'label' => 'Ссылка',
        'format' => 'raw',
        'value' => function($data){
            return Html::a(
                'Перейти',
                'user/view?id=1',
                [
                    'title' => 'Смелей вперед!',
                ],
                [
                'attribute'=>'id',
    'label'=>'Родительская категория',
    'format'=>'raw', // Возможные варианты: raw, html
    'content'=>function(){
                return \common\models\Project::RELATION_PROJECT_USERS;
            },

]
            );
        },
],
        ['class' => 'yii\grid\ActionColumn'],
    ],
]);

?>


<?php echo \yii2mod\comments\widgets\Comment::widget([
    'model' => $model,
]); ?>