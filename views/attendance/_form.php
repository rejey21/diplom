<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Club;

/** @var yii\web\View $this */
/** @var app\models\Attendance $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="attendance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_attendance')->dropDownList(ArrayHelper::map(\app\models\Club::find()->all(), 'name','name',)) ?>

    <?= $form->field($model, 'reason')->dropDownList([
    'По болезни' => 'По болезни',
    'По личным причинам' => 'По личным причинам',
    'Без причины' =>  'Без причины'
    ]) ?>

    <?= $form->field($model, 'attendance_date')->textInput(['type' => 'date'])?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-dark']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
