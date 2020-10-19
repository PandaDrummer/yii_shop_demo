<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CoffeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coffe-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'discription') ?>

    <?= $form->field($model, 'img') ?>

    <?= $form->field($model, 'l_price') ?>

    <?php // echo $form->field($model, 'm_price') ?>

    <?php // echo $form->field($model, 'h_price') ?>

    <?php // echo $form->field($model, 'sourness') ?>

    <?php // echo $form->field($model, 'bitterness') ?>

    <?php // echo $form->field($model, 'roasting') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
