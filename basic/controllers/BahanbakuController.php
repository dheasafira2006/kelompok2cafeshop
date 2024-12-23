<?php

namespace app\controllers;

use app\models\bahanbaku;
use app\models\bahanbakuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BahanbakuController implements the CRUD actions for bahanbaku model.
 */
class BahanbakuController extends Controller
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
     * Lists all bahanbaku models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new bahanbakuSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single bahanbaku model.
     * @param int $id_bahanbaku Id Bahanbaku
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_bahanbaku)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_bahanbaku),
        ]);
    }

    /**
     * Creates a new bahanbaku model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new bahanbaku();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_bahanbaku' => $model->id_bahanbaku]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing bahanbaku model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_bahanbaku Id Bahanbaku
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_bahanbaku)
    {
        $model = $this->findModel($id_bahanbaku);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_bahanbaku' => $model->id_bahanbaku]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing bahanbaku model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_bahanbaku Id Bahanbaku
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_bahanbaku)
    {
        $this->findModel($id_bahanbaku)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the bahanbaku model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_bahanbaku Id Bahanbaku
     * @return bahanbaku the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_bahanbaku)
    {
        if (($model = bahanbaku::findOne(['id_bahanbaku' => $id_bahanbaku])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
