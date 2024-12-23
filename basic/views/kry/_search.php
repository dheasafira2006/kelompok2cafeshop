<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KrySearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kry-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_karyawan') ?>

    <?= $form->field($model, 'nama_karyawan') ?>

    <?= $form->field($model, 'jabatan') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'TTL') ?>

    <?php // echo $form->field($model, 'no_hp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
