<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CoffeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coffes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coffe-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Coffe', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'id',
                'contentOptions' => ['style' => 'width:20px; '],
            ],
            'name',
            'discription:ntext',
            [
                'format'=>'html',
                'label'=>'img',
                'value'=> function($data){
                    return Html::img($data->getImg(),['width'=>100]);
                }
            ],
           // 'img',
            //'l_price',
            //'m_price',
            //'h_price',
            //'sourness',
            //'bitterness',
            //'roasting',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
