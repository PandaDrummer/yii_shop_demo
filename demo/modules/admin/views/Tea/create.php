<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tea */

$this->title = 'Create Tea';
$this->params['breadcrumbs'][] = ['label' => 'Teas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tea-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
