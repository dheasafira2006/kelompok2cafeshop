<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MengolahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mengolah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'no_mengolah') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'satuan') ?>

    <?= $form->field($model, 'id_bahanbaku') ?>

    <?= $form->field($model, 'id_menu') ?>

    <?php // echo $form->field($model, 'id_karyawan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
