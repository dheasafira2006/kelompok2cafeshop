<?php

use app\models\pesanan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\PesananSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pesanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pesanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pesanan',
            'id_pelanggan',
            'id_karyawan',
            'id_menu',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, pesanan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pesanan' => $model->id_pesanan]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
