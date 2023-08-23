<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Polzovately $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="polzovately-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_polzovatel')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'user_password')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-dark w-25']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
