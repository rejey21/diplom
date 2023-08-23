<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Matches $model */

$this->title = 'Изменить: ' . $model->match_id;
$this->params['breadcrumbs'][] = ['label' => 'Расписание матчей', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->match_id, 'url' => ['view', 'match_id' => $model->match_id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="matches-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
