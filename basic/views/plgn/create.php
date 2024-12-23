<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\plgn $model */

$this->title = 'Create Plgn';
$this->params['breadcrumbs'][] = ['label' => 'Plgns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plgn-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
