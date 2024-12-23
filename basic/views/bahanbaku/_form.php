<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\bahanbaku $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bahanbaku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_bahanbaku')->textInput() ?>

    <?= $form->field($model, 'nama_bahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga_satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_supplier')->textInput() ?>

    <?= $form->field($model, 'id_karyawan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
