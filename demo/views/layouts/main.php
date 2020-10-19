<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php Yii::getAlias('@web') ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php Yii::getAlias('@web') ?>/css/mygrid.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <!--
     <?php
    NavBar::begin([
        'brandLabel' => 'Главная',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Товары', 'url' => ['main/index']],
            ['label' => 'Заказы', 'url' => ['orders/index']],
            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/login'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>-->
    <div class="top_info row">
        <div class="col-3">
            <img src="<?php Yii::getAlias('@web') ?>/img/coffee.svg" alt="">
        </div>
        <div class="col-9 top_text">
            <h2>интернет магазин кофе your coffe</h2>
            <p>ЕЖЕНЕДЕЛЬНАЯ ОБЖАРКА И ДОСТАВКА СВЕЖЕГО КОФЕ</p>
        </div>
    </div>
    <nav>
        <ul class="nav-links">
            <li>
                <?= Html::a('главная', ['/']) ?>
            </li>
            <li>
                <?= Html::a('Кофе<sub>admin</sub>', ['coffe/index']) ?>
            </li>
            <li>
                <?= Html::a('Чай<sub>admin</sub>', ['tea/index']) ?>
            </li>
            <li>
                <?= Html::a('Заказы<sub>admin</sub>', ['/admin/orders?sort=-id']) ?>
            </li>
            <li>
                <?= Html::a('Выйти', ['/site/login']) ?>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
</header>
<div class="my_container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</div>





<?php $this->endBody() ?>
<script src=" <?php Yii::getAlias('@web')?>/js/main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
<?php $this->endPage() ?>
