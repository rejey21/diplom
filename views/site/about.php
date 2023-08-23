<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <h5 class="info1">
        Способы связи с нами:
    </h5>
    <br>
    <h4 class="info1">Место нахождения</h4>
    <section class="map">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d999.0132382861214!2d30.266848904371496!3d59.948294948445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696312d956bc111%3A0x3a60c856823f306d!2z0KDQsNC00LjQvtGC0LXRhdC90LjRh9C10YHQutC40Lkg0JrQvtC70LvQtdC00LY!5e0!3m2!1sru!2sru!4v1686302934458!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <br>
    <p class="info-about">
        <b>E-mail:</b> <a href="mailto:Info@spb-rtk.ru" target="_blank">Info@spb-rtk.ru</a>
    </p>
    <p class="info-about">
        <b>Телефоны:</b> (812) 405-85-30, (812)350-27-63 (приемная комиссия), (812) 405-85-38 (учебная часть), (812) 405-85-59
        (приемная директора)
    </p>
    <p class="info-about">
        <b>Адрес:</b> г. Санкт-Петербург, набережная реки Смоленки, д. 1, лит. А
    </p>
    <br>
    <h5 class="info1">Руководитель:</h5>
    <table style="width: 600px; height: 400px;" data-mce-width="1081" data-mce-height="742" border="2">
            <tbody class="table" border="2">
                <tr>
                    <td style="text-align: center;">
                        <p class="info1"><strong>Тренер - Куренкова С.А.</strong></p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;" >
                        <p ><img src="/image/coach.jpg"></p>
                    </td>
                </tr>
            </tbody>
        </table>
</div>