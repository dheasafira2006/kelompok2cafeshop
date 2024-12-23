<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\antrian $model */

$this->title = 'Create Antrian';
$this->params['breadcrumbs'][] = ['label' => 'Antrians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="antrian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
