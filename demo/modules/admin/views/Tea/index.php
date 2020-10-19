<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TeaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tea-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tea', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
