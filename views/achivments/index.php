<?php

use app\models\Achivments;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Достижения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="achivments-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать достижение', ['create'], ['class' => 'btn btn-dark w-25']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'achivments_id',
            'achive',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Achivments $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'achivments_id' => $model->achivments_id]);
                 }
            ],
        ],
    ]); ?>


</div>
