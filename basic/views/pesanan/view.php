<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\pesanan $model */

$this->title = $model->id_pesanan;
$this->params['breadcrumbs'][] = ['label' => 'Pesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pesanan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pesanan' => $model->id_pesanan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pesanan' => $model->id_pesanan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pesanan',
            'id_pelanggan',
            'id_karyawan',
            'id_menu',
        ],
    ]) ?>

</div>
