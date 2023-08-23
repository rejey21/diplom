<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Attendance $model */

$this->title = $model->name_attendance;
$this->params['breadcrumbs'][] = ['label' => 'Посещаемость', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="attendance-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'attendance_id' => $model->attendance_id], ['class' => 'btn btn-dark']) ?>
        <?= Html::a('Удалить', ['delete', 'attendance_id' => $model->attendance_id], [
            'class' => 'btn btn-dark',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'attendance_id',
            'name_attendance',
            'reason',
            'attendance_date',
        ],
    ]) ?>

</div>
