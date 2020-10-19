<?php use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="row container">
    <div class="col-8">
        <div class="cart_table ">
            <table>
                <tr>
                    <th class="cart_table_head">Название</th>
                    <th class="cart_table_head">Цена</th>
                    <th class="cart_table_head">Тип помола</th>
                </tr>
                <?php foreach ($cart as $id=>$item): ?>
                <tr>
                    <th class="cart_table_name">
                        <img class="cart_table_img" src="<?=Yii::getAlias('@web') ?>/uploads/<?=$item['img']?>" alt="">
                        <p><?=$item['name'] ?><br><?=$item['wieght']?>г</p>
                    </th>
                    <th><?=$item['price'] ?></th>
                    <th><?=$item['type'] ?></th>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
        <button class="btn_clear" >Очистить</button>
    </div>

    <div class="col-4">
        <?php $form = ActiveForm::begin([
            'options' => ['class' => 'form-send'],
        ]); ?>

        <?= $form->field($orderform, 'name')->textInput(['maxlength' => true,'class' => 'text','placeholder' => 'Name'])->label(false) ?>

        <?= $form->field($orderform, 'phone')->textInput(['class' => 'text','placeholder' => 'Phone'])->label(false) ?>


        <?= Html::submitButton('Заказать', ['class' => 'btn_buy_2']) ?>

        <?php ActiveForm::end(); ?>
        <br><br> <br><br> <br><br>
    </div>
</div>
