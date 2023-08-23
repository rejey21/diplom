<?php

use app\models\Matches;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\ListView;
use yii\widgets\BaseListView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Расписание матчей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matches-index">

    <h1><?= Html::encode($this->title) ?></h1>

    
        <!-- <?= Html::a('Изменить матч', ['view'], ['class' => 'btn btn-success']) ?> -->
    
        
   <?=   ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => 'card',
        'layout' => "{summary}\n{items}\n{pager}",
    ]); ?>


</div>
