<?php

namespace app\controllers;

use app\models\antrian;
use app\models\AntrianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AntrianController implements the CRUD actions for antrian model.
 */
class AntrianController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all antrian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AntrianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single antrian model.
     * @param int $id_antrian Id Antrian
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_antrian)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_antrian),
        ]);
    }

    /**
     * Creates a new antrian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new antrian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_antrian' => $model->id_antrian]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing antrian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_antrian Id Antrian
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_antrian)
    {
        $model = $this->findModel($id_antrian);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_antrian' => $model->id_antrian]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing antrian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_antrian Id Antrian
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_antrian)
    {
        $this->findModel($id_antrian)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the antrian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_antrian Id Antrian
     * @return antrian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_antrian)
    {
        if (($model = antrian::findOne(['id_antrian' => $id_antrian])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
