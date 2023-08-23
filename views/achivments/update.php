<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Achivments $model */

$this->title = 'Изменить достижение: ' . $model->achivments_id;
$this->params['breadcrumbs'][] = ['label' => 'Достижения', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->achivments_id, 'url' => ['view', 'achivments_id' => $model->achivments_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="achivments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
