<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\MatchesAway;
use app\models\MatchesHome;
use app\models\Status;

/** @var yii\web\View $this */
/** @var app\models\Matches $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="matches-form">

       <?php $form = ActiveForm::begin(); ?>

       <?= $form->field($model, 'match_date')->textInput(['type' => 'date']) ?>

       <?= $form->field($model, 'score')->dropDownList([ 'prompt' => '-----',
       '0:0' => '0:0',
       '0:1' => '0:1',
       '0:2' => '0:2',
       '0:3' => '0:3',
       '1:3' => '1:3',
       '2:3' => '2:3',
       '1:0' => '1:0',
       '2:0' => '2:0',
       '3:0' => '3:0',
       '3:1' => '3:1',
       '3:2' => '3:2',
       ]) ?>

       <?= $form->field($model, 'team1')->dropDownList(ArrayHelper::map(MatchesHome::find()->all(), 'team_home','team_home'),['prompt' => '-----','maxlength' => true, 'placeholder' => 'Пример: Зенит-СПБ']) ?>

       <?= $form->field($model, 'team2')->dropDownList(ArrayHelper::map(MatchesAway::find()->all(), 'team_away','team_away'),['prompt' => '-----','maxlength' => true, 'placeholder' => 'Пример: Локомотив-Новосибирск']) ?>

       <?= $form->field($model, 'tournament')->dropDownList(ArrayHelper::map(\app\models\Matches::find()->all(), 'tournament','tournament'),['placeholder' => 'Пример: Чемпионат России (22/23)']) ?>

       <?= $form->field($model, 'match_status')->dropDownList(ArrayHelper::map(Status::find()->all(), 'status','status'),['prompt' => '-----']) ?>

       <div class="form-group">
           <?= Html::submitButton('Добавить', ['class' => 'btn btn-dark']) ?>
       </div>

       <?php ActiveForm::end(); ?>
</div>
