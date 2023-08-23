<?php 
use yii\bootstrap4\Html;
?>

<div class="card" style="width: 15rem; margin-right: 30px; margin-bottom: 30px; margin-top: 30px;">
  <img src="/image/line-up/<?= $model->image ?>" style="width: 239px; height: 250px;" class="card-img-top" alt="Игрок">
  <div class="card-body text-center" >
    <h5 class="card-title" style="white-space: nowrap;"><?= $model->name ?></h5>
    <h4 style="border-bottom: 1px solid black;"></h4>
    <p class="card-text" style="white-space: nowrap;"><?= $model->position ?></p>
    <?= Html::a('Профиль игрока', ['view', 'id_club' => $model->id_club], ['class' => 'btn btn-dark-profile flex-wrap', 'style' => 'align:center; width:200px; height:45px;']) ?>
  </div>
</div>