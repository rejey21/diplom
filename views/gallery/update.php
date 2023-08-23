<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Gallery $model */

$this->title = 'Изменить фотографию: ' . $model->gallery_id;
$this->params['breadcrumbs'][] = ['label' => 'Галерея', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gallery_id, 'url' => ['view', 'gallery_id' => $model->gallery_id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="gallery-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
