<?php

use app\models\bahanbaku;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\bahanbakuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bahanbakus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahanbaku-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bahanbaku', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_bahanbaku',
            'nama_bahan',
            'satuan',
            'harga_satuan',
            'id_supplier',
            //'id_karyawan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, bahanbaku $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_bahanbaku' => $model->id_bahanbaku]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
