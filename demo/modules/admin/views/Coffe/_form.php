<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Coffe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coffe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discription')->textarea(['rows' => 6])->label('Описание') ?>


    <?= $form->field($model, 'l_price')->textInput()->label('Цена за 100г') ?>

    <?= $form->field($model, 'm_price')->textInput()->label('Цена за 250г') ?>

    <?= $form->field($model, 'h_price')->textInput()->label('Цена за 500г') ?>

    <?= $form->field($model, 'sourness')->textInput()->label('Кислинка') ?>

    <?= $form->field($model, 'bitterness')->textInput()->label('Горчинка') ?>

    <?= $form->field($model, 'roasting')->textInput()->label('Обжарка') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
