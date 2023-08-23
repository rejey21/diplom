<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Achivments $model */

$this->title = 'Создание достижения';
$this->params['breadcrumbs'][] = ['label' => 'Достижения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="achivments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
