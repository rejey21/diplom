<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use app\models\Polzovately;
use app\models\Achivments;

/** @var yii\web\View $this */
/** @var app\models\Club $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="club-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->dropDownList(ArrayHelper::map(\app\models\Polzovately::find()->all(), 'name_polzovatel', 'name_polzovatel')) ?>

    <?= $form->field($model, 'position')->dropDownList(ArrayHelper::map(\app\models\Club::find()->all(), 'position', 'position')) ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'player_achive')->dropDownList(ArrayHelper::map(\app\models\Achivments::find()->all(), 'achive', 'achive'))?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'date_birth')->textInput(['type' => 'date'])?>

    <div class="form-group">
        <?= Html::submitButton('Добавить участника', ['class' => 'btn btn-dark w-25']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
