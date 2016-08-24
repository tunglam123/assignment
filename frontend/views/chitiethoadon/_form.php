<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chitiethoadon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitiethoadon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MaSP')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'MaHD')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'SoLuongMua')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'DonGiaBan')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'HoaDon_MaHD')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
