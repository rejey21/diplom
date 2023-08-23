<?php

use app\models\Club;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\ListView;
use app\models\User;

/** @var yii\web\View $this */
/** @var app\models\ClubSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Состав команды';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="club-index">

    <h1><?= Html::encode($this->title) ?></h1>

   <?php echo $this->render('_search', ['model' => $searchModel]); ?> 
   
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'layout' => '<div class="d-flex flex-wrap">{items}</div>',
        'itemView' => 'card'
    ]) ?>


</div>
