<?php 
use yii\bootstrap4\Html;
?>

<div class="d-flex flex-wrap" style="margin: 20px 0px 20px 0px;">
<table class="table table-dark table-bordered" style="text-align:center;font-size: 105%; table-layout: fixed; width: 1500px;">
  <thead class="match_table">
    <tr>
      <th scope="col">День мачта</th>
      <th scope="col">Дома</th>
      <th scope="col">Счёт</th>
      <th scope="col">В гостях</th>
      <th scope="col">Турнир</th>
    </tr>
  </thead>
  <tbody class="match_table">
    <tr>
      <td > <?= $model->match_date ?> </td>
      <td > <?= $model->team1 ?> </td>
      <td > <?= $model->score ?> </td>
      <td > <?= $model->team2 ?> </td>
      <td > <?= $model->tournament ?> </td>
    </tr>
  </tbody>
  <tfoot class="match_table">
    <tr> 
      <td class="statuse" colspan="5"> Статус матча: <?= $model->match_status ?> 
    </tr>
      <?php if(Yii::$app->user->can('administrator') && ($model->match_status == 'Будет' || $model->match_status == 'Идёт')):?>
        <tr><td colspan="5"><a class="btn btn-dark d-flex" style="width: 66rem; height: 25px; background-color: #575757; color: white;" href="/matches/view?match_id=<?=$model->match_id?>" target="blank">Изменить</a></td></tr>
      <?php endif; ?></td>
      <?php if(Yii::$app->user->can('administrator') && ($model->match_status == 'Закончен')):?>
        <tr><td colspan="5"><a class="btn btn-dark d-flex" style="width: 66rem; height: 25px; background-color: #575757; color: white;" data-confirm="Вы действительно хотите удалить матч?" data-method="post" href="/matches/delete?match_id=<?=$model->match_id?>" target="blank">Удалить</a></td></tr>
      <?php endif; ?></td>
  </tfoot>
</table>
</div>
