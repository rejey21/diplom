<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Club $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Состав команды', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="club-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(Yii::$app->user->can('administrator')):?>
        <a class="btn btn-dark d-flex w-25" style="width: 30rem; height: 25px; margin: 0px 0px 10px 10px; " data-method="post" href="/club/delete?id_club=<?=$model->id_club?>" target="blank">Убрать из состава</a>
    <?php endif; ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'position',
            'player_achive',
            'height',
            'date_birth',
            [
                'attribute' => 'image',
                'value' => '/image/line-up/'.$model->image,
                'format' => ['image'],
            ],
        ],
    ]) ?>

</div>
