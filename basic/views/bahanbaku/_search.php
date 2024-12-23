<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\bahanbakuSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bahanbaku-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_bahanbaku') ?>

    <?= $form->field($model, 'nama_bahan') ?>

    <?= $form->field($model, 'satuan') ?>

    <?= $form->field($model, 'harga_satuan') ?>

    <?= $form->field($model, 'id_supplier') ?>

    <?php // echo $form->field($model, 'id_karyawan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
