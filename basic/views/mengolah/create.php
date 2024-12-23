<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\mengolah $model */

$this->title = 'Create Mengolah';
$this->params['breadcrumbs'][] = ['label' => 'Mengolahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mengolah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
