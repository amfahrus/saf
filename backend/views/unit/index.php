<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UnitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Units';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Unit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options'=>['class'=>'grid-view table-responsive'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'p_master_unit_id',
            'unit_name',
            'unit_code',
            //'unit_status',
            //'unit_parent',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
