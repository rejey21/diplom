<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Attendance $model */

$this->title = 'Отметить';
$this->params['breadcrumbs'][] = ['label' => 'Посещаемость', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attendance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
