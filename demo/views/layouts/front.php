<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php Yii::getAlias('@web') ?>/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php Yii::getAlias('@web') ?>/css/mygrid.css">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <header>
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
                    <?= Html::a('кофе', ['/']) ?>
                </li>
                <li>
                    <?= Html::a('чай', ['tea']) ?>
                </li>
                <li>
                    <a href="">о нас</a>
                </li>
                <li>

                    <?= Html::a('корзина', ['buy']) ?>
                </li>
                <?php if (!Yii::$app->user->isGuest): ?>
                    <li>
                        <?= Html::a('Админка', ['admin/coffe/index']) ?>
                    </li>
                <?php endif; ?>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>

    <?= $content ?>




    <?php $this->endBody() ?>
    <script src=" <?php Yii::getAlias('@web')?>/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    </body>
    </html>
<?php $this->endPage() ?>