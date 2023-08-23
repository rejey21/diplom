<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Club $model */

$this->title = 'Изменить участника: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Состав команды', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id_club' => $model->id_club]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="club-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
