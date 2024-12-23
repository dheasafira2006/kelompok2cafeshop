<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\plgn $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="plgn-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pelanggan')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
