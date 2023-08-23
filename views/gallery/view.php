<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Gallery $model */

$this->title = $model->gallery_id;
$this->params['breadcrumbs'][] = ['label' => 'Галерея', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="gallery-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'gallery_id' => $model->gallery_id], ['class' => 'btn btn-dark']) ?>
        <?= Html::a('Удалить', ['delete', 'gallery_id' => $model->gallery_id], [
            'class' => 'btn btn-dark',
            'data' => [
                'confirm' => 'Вы уверены, что хотите дуалить фотографию?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'gallery_id',
            [
                'attribute' => 'photo',
                'value' => '/image/gallery/'.$model->photo,
                'format' => ['image', ['width' => 800, 'height' => 600]],
            ],
        ],
    ]) ?>

</div>
