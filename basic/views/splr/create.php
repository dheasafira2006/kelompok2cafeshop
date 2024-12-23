<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\splr $model */

$this->title = 'Create Splr';
$this->params['breadcrumbs'][] = ['label' => 'Splrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="splr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
