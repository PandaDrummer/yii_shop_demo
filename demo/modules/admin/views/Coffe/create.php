<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Coffe */

$this->title = 'Create Coffe';
$this->params['breadcrumbs'][] = ['label' => 'Coffes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coffe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
