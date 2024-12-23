<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\pesanan $model */

$this->title = 'Create Pesanan';
$this->params['breadcrumbs'][] = ['label' => 'Pesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
