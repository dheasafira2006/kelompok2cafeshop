<?php

use app\models\mengolah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\MengolahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mengolahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mengolah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mengolah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_mengolah',
            'jumlah',
            'satuan',
            'id_bahanbaku',
            'id_menu',
            //'id_karyawan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, mengolah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_mengolah' => $model->no_mengolah]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
