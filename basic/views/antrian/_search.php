<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AntrianSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="antrian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_antrian') ?>

    <?= $form->field($model, 'tanggal_antrian') ?>

    <?= $form->field($model, 'no_antrian') ?>

    <?= $form->field($model, 'id_pelanggan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
