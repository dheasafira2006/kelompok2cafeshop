<?php

namespace app\controllers;

use app\models\mengolah;
use app\models\MengolahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MengolahController implements the CRUD actions for mengolah model.
 */
class MengolahController extends Controller
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
     * Lists all mengolah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MengolahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single mengolah model.
     * @param int $no_mengolah No Mengolah
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_mengolah)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_mengolah),
        ]);
    }

    /**
     * Creates a new mengolah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new mengolah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_mengolah' => $model->no_mengolah]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing mengolah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $no_mengolah No Mengolah
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_mengolah)
    {
        $model = $this->findModel($no_mengolah);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_mengolah' => $model->no_mengolah]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing mengolah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $no_mengolah No Mengolah
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_mengolah)
    {
        $this->findModel($no_mengolah)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the mengolah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $no_mengolah No Mengolah
     * @return mengolah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_mengolah)
    {
        if (($model = mengolah::findOne(['no_mengolah' => $no_mengolah])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
