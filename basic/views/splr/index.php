<?php

use app\models\splr;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\splrSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Splrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="splr-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Splr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_supplier',
            'nama_supplier',
            'alamat',
            'no_hp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, splr $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_supplier' => $model->id_supplier]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
