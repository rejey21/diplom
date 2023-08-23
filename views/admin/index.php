<?php

use app\models\Polzovately;
use app\models\Matches;
use app\models\Club;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="polzovately-index">

    <h1>Пользователи</h1>

    <p class="d-flex " style='width: 65rem; height: 50px;'> 
        <?= Html::a('Создать пользователя', ['create'], ['class' => 'btn btn-dark w-50']) ?>

        <?= Html::a('Добавить участника', ['/club/create'], ['class' => 'btn btn-dark w-50']) ?>

        <?= Html::a('Добавить достижение', ['/achivments/create'], ['class' => 'btn btn-dark w-50']) ?>
    </p>
    
    <p class="d-flex " style='width: 65rem; height: 50px;'> 
        <?= Html::a('Добавить фотографию', ['/gallery/create'], ['class' => 'btn btn-dark w-50']) ?>

        <?= Html::a('Добавить матч', ['/matches/create'], ['class' => 'btn btn-dark w-50']) ?>

        <!-- <?= Html::a('Изменить игрока', ['/club/update'], ['class' => 'btn btn-dark w-50']) ?> -->
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_polzovatel',
            // 'username',
            // 'user_password',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Polzovately $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
