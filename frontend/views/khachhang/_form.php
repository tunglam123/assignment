<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Khachhang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khachhang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MaKH')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'TenKH')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'DiaChi')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'SoDT')->textInput(['maxlength' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
