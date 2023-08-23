
<div class="card text-bg-dark" style="width: 30rem; margin-right: 40px; margin-bottom: 30px; margin-top: 30px;margin-left: 30px;">
  <img src="/image/gallery/<?= $model->photo ?>" class="card-img" style="width: 478px; height: 450px;" alt="Фото">
  <div class="card-body" style="background-color: rgb(40, 167, 255);">
    <p class="card-text info2" style="text-align: center;color: rgb(255, 255, 255);">Место фотографии: <br> <?= $model->mesto?></p>
    <p class="card-text info2" style="text-align: center;color: rgb(255, 255, 255);">Дата: <br> <?= $model->photo_date?></p>
    <?php if(Yii::$app->user->can('administrator')):?>
      <a class="btn btn-dark d-flex" style="width: 26rem; height: 25px; align-items: center;text-align: center;" href="/gallery/view?gallery_id=<?=$model->gallery_id?>" target="blank">Изменить</a>
    <?php endif; ?>
  </div>
</div>