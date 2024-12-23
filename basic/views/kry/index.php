<?php

use app\models\kry;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\KrySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kry-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kry', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_karyawan',
            'nama_karyawan',
            'jabatan',
            'alamat',
            'TTL',
            //'no_hp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, kry $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_karyawan' => $model->id_karyawan]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
