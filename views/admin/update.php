<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Polzovately $model */

$this->title = 'Изменить пользователя с ID: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Polzovatelies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="polzovately-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
