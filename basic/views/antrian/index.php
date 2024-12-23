<?php

use app\models\antrian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\AntrianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Antrians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="antrian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Antrian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_antrian',
            'tanggal_antrian',
            'no_antrian',
            'id_pelanggan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, antrian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_antrian' => $model->id_antrian]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
