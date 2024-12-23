<?php

use app\models\plgn;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\PlgnSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Plgns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plgn-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Plgn', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pelanggan',
            'nama',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, plgn $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pelanggan' => $model->id_pelanggan]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
