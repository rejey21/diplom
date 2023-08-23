<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Achivments $model */

$this->title = $model->achivments_id;
$this->params['breadcrumbs'][] = ['label' => 'Достижения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="achivments-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'achivments_id' => $model->achivments_id], ['class' => 'btn btn-dark']) ?>
        <?= Html::a('Удалить', ['delete', 'achivments_id' => $model->achivments_id], [
            'class' => 'btn btn-dark',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить достижение?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'achivments_id',
            'achive',
        ],
    ]) ?>

</div>
