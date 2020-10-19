<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<section class="product container row">
    <h3>слабая ОБЖАРКА</h3>
    <?php foreach ($coffe as $a):?>
    <?php if($a->roasting==1||$a->roasting==2):?>

    <div class="col-4 asd" >
        <div class="card" data-aos="fade-up" data-aos-duration="1000">
            <img src="<?= Yii::getAlias('@web')?>/uploads/<?= $a->img?>" alt="">
            <p class="product_name"><?=$a->name ?></p>
            <p class="discription"><?= $a->discription?></p>
            <p class="price">от <?=$a->l_price?>р</p>
            <?= Html::a('посмотреть', ['view', 'id' => $a->id], ['class' => 'btn_look']) ?>

        </div>
    </div>
    <?php endif; ?>
 <?php endforeach;?>

</section>
<section class="product container row">
    <h3>СРЕДНЯЯ ОБЖАРКА</h3>
    <?php foreach ($coffe as $a):?>
        <?php if($a->roasting==3||$a->roasting==4):?>
            <div class="col-4 asd">
                <div class="card" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?= Yii::getAlias('@web')?>/uploads/<?= $a->img?>" alt="">
                    <p class="product_name"><?=$a->name ?></p>
                    <p class="discription"><?= $a->discription?></p>
                    <p class="price">от <?=$a->l_price?>р</p>
                    <?= Html::a('посмотреть', ['view', 'id' => $a->id], ['class' => 'btn_look']) ?>

                </div>
            </div>
        <?php endif; ?>
    <?php endforeach;?>
</section>