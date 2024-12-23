<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\kry $model */

$this->title = 'Create Kry';
$this->params['breadcrumbs'][] = ['label' => 'Kries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
