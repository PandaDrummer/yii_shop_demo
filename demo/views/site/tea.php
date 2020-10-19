<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<section class="product container row">
    <?php foreach ($tea as $a):?>
            <div class="col-4 asd">
                <div class="card" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?= Yii::getAlias('@web')?>/uploads/<?= $a->img?>" alt="">
                    <p class="product_name"><?=$a->name ?></p>
                    <p class="discription"><?= $a->discription?></p>
                    <p class="price">от <?=$a->l_price?>р</p>
                    <?= Html::a('посмотреть', ['tea-view', 'id' => $a->id], ['class' => 'btn_look']) ?>

                </div>
            </div>
    <?php endforeach;?>

</section>