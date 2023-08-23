<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Matches $model */

$this->title = 'Добавление матча';
$this->params['breadcrumbs'][] = ['label' => 'Расписание матчей', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matches-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
