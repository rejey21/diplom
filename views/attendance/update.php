<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Attendance $model */

$this->title = 'Обновить данные:' . $model->name_attendance;
$this->params['breadcrumbs'][] = ['label' => 'Посещаемость', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name_attendance, 'url' => ['view', 'attendance_id' => $model->attendance_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="attendance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
