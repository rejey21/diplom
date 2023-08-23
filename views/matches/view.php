<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Matches $model */

$this->title = $model->match_id;
$this->params['breadcrumbs'][] = ['label' => 'Расписание матчей', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="matches-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'match_id' => $model->match_id], ['class' => 'btn btn-dark']) ?>
        <?= Html::a('Удалить', ['delete', 'match_id' => $model->match_id], [
            'class' => 'btn btn-dark',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить матч?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'match_id',
            'match_date',
            'score',
            'team1',
            'team2',
            'tournament',
            'match_status',
        ],
    ]) ?>

</div>
