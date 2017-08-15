<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Unit;

/* @var $this yii\web\View */
/* @var $model backend\models\Unit */
/* @var $form yii\widgets\ActiveForm */
$listData= array(
    1 => 'Enable',
    0 => 'Disable'
);
$root_parent = array(0 => "Root");
$parent = ArrayHelper::map(Unit::find()->all(),'p_master_unit_id','unit_name');
$parents = array_merge($root_parent, $parent);
?>

<div class="unit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'unit_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_status')->dropdownList($listData) ?>

    <?= $form->field($model, 'unit_parent')->dropdownList($parents) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
