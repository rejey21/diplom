<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Achivments $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="achivments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'achive')->textInput(['maxlength' => true, 'placeholder' => 'Пример: Чемпион мира (2021)']) ?>

    <div class="form-group">
        <?= Html::submitButton('Создать', ['class' => 'btn btn-dark w-25']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
