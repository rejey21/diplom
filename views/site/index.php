<?php

/** @var yii\web\View $this */

$this->title = 'Главная страница';
?>
<main>
    <h1 class="display-4">Главная страница</h1>
    <br>
    <section>
        <h2 class="info">Информация</h2>
        <p class="main_text_page" style="text-align:left; font-size: 16px; font-family: 'Georgia';">Волейбол (англ. volleyball от volley — «удар с лёту» и ball — «мяч») — вид спорта, командная спортивная
            игра, в процессе которой две команды соревнуются на специальной площадке, разделённой сеткой, стремясь
            направить мяч на сторону соперника таким образом, чтобы он приземлился на площадке противника (добить до
            пола), либо чтобы игрок защищающейся команды допустил ошибку. При этом для организации атаки игрокам одной
            команды разрешается не более трёх касаний мяча подряд (в дополнение к касанию на блоке).

            Волейбол — неконтактный, комбинационный вид спорта, где каждый игрок имеет строгую специализацию на
            площадке. Важнейшими качествами для игроков в волейбол являются прыгучесть для возможности высоко подняться
            над сеткой, реакция, координация, физическая сила для эффективного произведения атакующих ударов.

            Для любителей волейбол — распространённое развлечение и способ отдыха благодаря простоте правил и
            доступности инвентаря, обычно проводимое на специальных пляжных площадках или спортзалах.
            <br>
            <br>
            Центральный орган волейбола как международного вида спорта, определяющий свод правил — Международная
            федерация волейбола, <b>FIVB</b> (англ.). Волейбол входит в программу Олимпийских игр с 1964 года.
            <br>
            Игрок, играющий в эту игру — <b>волейболист</b>.
        </p>
        <br>
        <p style="text-align:left; font-size: 18px; font-family: 'Georgia';">Мы - спортивный клуб колледжа. Наша цель - помочь студентам сохранять здоровье и поддерживать физическую
            форму.Мы хотим побеждать всегда и везде и для этого ты нужен нам. Мы предлагаем широкий выбор тренажеров и
            индивидуальных тренировок. С их помощью ты станешь в разы сильнее, что в свою очередь даст тебе возможность проявить себя.</p>
    </section>
    <br>
    <section id="schedule_class">
        <h2 class="info">Расписание клуба</h2>
        <br>
        <table style="width: 600px; height: 200px;" data-mce-width="1080" data-mce-height="750" border="2">
            <tbody class="main_table info2" style="background-color: rgb(0, 149, 232); color: white;">
                <tr>
                    <td style="text-align: center;">
                        <p><strong>Дни занятий</strong></p>
                    </td>
                    <td style="text-align: center;">
                        <p><strong>Время</strong></p>
                    </td>
                    <td style="text-align: center;">
                        <p><strong>Аудитория</strong></p>
                    </td>
                    <td style="text-align: center;">
                        <p><strong>Тренер</strong></p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <p>Понедельник</p>
                    </td>
                    <td style="text-align: center;">
                        <p>17.30-18.15<br>18.25-19.10 </p>
                    </td>
                    <td style="text-align: center;">
                        <p>Спортивный зал колледжа</p>
                    </td>
                    <td style="text-align: center;">
                        <p>Куренкова С.А.</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <p>Среда</p>
                    </td>
                    <td style="text-align: center;">
                        <p>17.30-18.15<br>18.25-19.10 </p>
                    </td>
                    <td style="text-align: center;">
                        <p>Спортивный зал колледжа</p>
                    </td>
                    <td style="text-align: center;">
                        <p>Куренкова С.А.</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <p>Пятница</p>
                    </td>
                    <td style="text-align: center;">
                        <p>17.30-18.15<br>18.25-19.10 </p>
                    </td>
                    <td style="text-align: center;">
                        <p>Спортивный зал колледжа</p>
                    </td>
                    <td style="text-align: center;">
                        <p>Куренкова С.А.</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <br>
    <section>
        <h2 class="info">Фотографии</h2>
        <div class="main_photo_sliders">
            <input checked type="radio" name="respond" id="desktop">
            <article id="slider">
                <input checked type="radio" name="slider" id="switch1">
                <input type="radio" name="slider" id="switch2">
                <input type="radio" name="slider" id="switch3">
                <input type="radio" name="slider" id="switch4">

                <div id="slides">
                    <div id="overflow">
                        <div class="image"> 
                            <article><img src="/image/mainpage/photo6.jpg" style="width:650px; height:700px;"></article>
                            <article><img src="/image/mainpage/photo2.jpg" style="width:650px; height:700px;"></article>
                            <article><img src="/image/mainpage/photo3.jpg" style="width:650px; height:700px;"></article>
                            <article><img src="/image/mainpage/photo5.jpg" style="width:650px; height:700px;"></article>
                        </div>
                    </div>
                </div>
                <div id="controls">
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                    <label for="switch3"></label>
                    <label for="switch4"></label>
                </div>
                <div id="active">
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                    <label for="switch3"></label>
                    <label for="switch4"></label>
                </div>
            </article>
        </div>
    </section>
</main>