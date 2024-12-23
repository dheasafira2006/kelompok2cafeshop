<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\mengolah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mengolah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_mengolah')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_bahanbaku')->textInput() ?>

    <?= $form->field($model, 'id_menu')->textInput() ?>

    <?= $form->field($model, 'id_karyawan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
