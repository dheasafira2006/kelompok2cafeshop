<?php

namespace app\controllers;

use app\models\kry;
use app\models\KrySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KryController implements the CRUD actions for kry model.
 */
class KryController extends Controller
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
     * Lists all kry models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KrySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single kry model.
     * @param int $id_karyawan Id Karyawan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_karyawan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_karyawan),
        ]);
    }

    /**
     * Creates a new kry model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new kry();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_karyawan' => $model->id_karyawan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing kry model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_karyawan Id Karyawan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_karyawan)
    {
        $model = $this->findModel($id_karyawan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_karyawan' => $model->id_karyawan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing kry model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_karyawan Id Karyawan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_karyawan)
    {
        $this->findModel($id_karyawan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the kry model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_karyawan Id Karyawan
     * @return kry the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_karyawan)
    {
        if (($model = kry::findOne(['id_karyawan' => $id_karyawan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
