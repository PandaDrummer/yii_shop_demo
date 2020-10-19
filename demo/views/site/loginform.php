<div class="oncart"></div>
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="main-photo" style="height: 75vh;margin-top: 10vh;">
<?php $form = ActiveForm::begin([
    'options' => [
        'id' => 'signin'
    ]
]); ?>

<?= $form->field($model, 'username')->textInput(['class'=>'asda','id'=>'user']) ?>

<?= $form->field($model, 'password')->textInput(['class'=>'asd','id'=>'pass']) ?>

    <div class="">
        <?= Html::submitButton('Войти') ?>
    </div>

<?php ActiveForm::end(); ?>
</div>
<style>

    form {
        position: relative;
        width: 35vw;
        background: #FFFFFF;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;

    }
    form input {
        font-family: 'Poppins', sans-serif;
        outline: 0;
        border-style: solid;
        border-width: 1px;
        border-color: #000;
        width: 100%;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    form button {
        font-family: 'Roboto', sans-serif;
        border-style: solid;
        border-width: 1px;
        border-color: #000;
        padding: 1vh;
        background-color: #fff;
        position: relative;
        left: 1vh;
        width: 15vw;
    }
    form button:hover,.form button:active,.form button:focus {

    }
    form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
    }
    form .message a {
        color: #4CAF50;
        text-decoration: none;
    }
    form .register-form {
        display: none;
    }


</style>