<?php

namespace app\controllers;

use app\models\plgn;
use app\models\PlgnSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PlgnController implements the CRUD actions for plgn model.
 */
class PlgnController extends Controller
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
     * Lists all plgn models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PlgnSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single plgn model.
     * @param int $id_pelanggan Id Pelanggan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pelanggan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pelanggan),
        ]);
    }

    /**
     * Creates a new plgn model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new plgn();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pelanggan' => $model->id_pelanggan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing plgn model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_pelanggan Id Pelanggan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pelanggan)
    {
        $model = $this->findModel($id_pelanggan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pelanggan' => $model->id_pelanggan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing plgn model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_pelanggan Id Pelanggan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pelanggan)
    {
        $this->findModel($id_pelanggan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the plgn model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_pelanggan Id Pelanggan
     * @return plgn the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pelanggan)
    {
        if (($model = plgn::findOne(['id_pelanggan' => $id_pelanggan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
