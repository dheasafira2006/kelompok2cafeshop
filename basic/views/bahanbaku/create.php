<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\bahanbaku $model */

$this->title = 'Create Bahanbaku';
$this->params['breadcrumbs'][] = ['label' => 'Bahanbakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahanbaku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
