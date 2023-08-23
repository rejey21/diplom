<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Club;

/** @var yii\web\View $this */
/** @var app\models\ClubSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="club-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'id_club') ?>  -->

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'position')->dropDownList(ArrayHelper::map(Club::find()->all(), 'position','position'),['prompt' => '-----',])?> 

    <!-- <?= $form->field($model, 'height') ?> -->

    <!-- <?= $form->field($model, 'image') ?> -->

    <!-- <?= $form->field($model, 'date_birth') ?> -->

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-outline-secondary mb-3', 'style' => 'width:150px; height:50px;align:center;']) ?>
        <?= Html::a('Сбросить', ['index'], ['class' => 'btn btn-outline-secondary mb-3', 'style' => 'width:150px; height:50px;align:center;'])?>
    </div>
  
    <?php ActiveForm::end(); ?>

</div>
