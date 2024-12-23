<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\antrian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="antrian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_antrian')->textInput() ?>

    <?= $form->field($model, 'tanggal_antrian')->textInput() ?>

    <?= $form->field($model, 'no_antrian')->textInput() ?>

    <?= $form->field($model, 'id_pelanggan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
