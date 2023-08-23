<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php 
    NavBar::begin([
        'brandLabel' => Html::img('/image/logo2.jpg', ['width' => '55px','height' => '45px', 'alt' => 'logo']) . '' . 'Спортивный клуб "VolleyBall"',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-primary fixed-top ',
        ],
    ]);

    $menutop = [
        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'О нас', 'url' => ['/site/about']],
        ['label' => 'Галерея', 'url' => ['/gallery']],
        ['label' => 'Расписание матчей', 'url' => ['/matches']],
        ['label' => 'Состав', 'url' => ['/club']],
    ]; 

    // if (Yii::$app->user->isGuest) {
    //     $menutop [] = ['label' => 'Меню', 'items' => [['label' => 'Авторизация', 'url' => ['/site/login']],['label' => 'Регистрация', 'url' => ['/site/signup']]]];
    // }

    if (Yii::$app->user->can('administrator')) {
        $menutop [] = ['label' => 'Админ', 'items' => [['label' => 'Админ панель', 'url' => ['/admin']],['label' => 'Посещаемость', 'url' => ['/attendance']]]];
    }
    
    if (Yii::$app->user->can('user')) {
        $menutop [] = ['label' => 'Выйти ('.Yii::$app->user->identity->username.')','url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']];
    }
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto' ],
        'items' => $menutop,
    ]);
    NavBar::end();

    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3" style="background-color: rgb(0, 123, 255); color: rgb(255, 255, 255);">
    <div class="container">
        <p class="float-left">&copy; Спортивый клуб колледжа "VolleyBall"</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
