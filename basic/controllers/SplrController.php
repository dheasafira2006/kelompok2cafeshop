<?php

namespace app\controllers;

use app\models\splr;
use app\models\splrSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SplrController implements the CRUD actions for splr model.
 */
class SplrController extends Controller
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
     * Lists all splr models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new splrSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single splr model.
     * @param int $id_supplier Id Supplier
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_supplier)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_supplier),
        ]);
    }

    /**
     * Creates a new splr model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new splr();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_supplier' => $model->id_supplier]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing splr model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_supplier Id Supplier
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_supplier)
    {
        $model = $this->findModel($id_supplier);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_supplier' => $model->id_supplier]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing splr model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_supplier Id Supplier
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_supplier)
    {
        $this->findModel($id_supplier)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the splr model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_supplier Id Supplier
     * @return splr the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_supplier)
    {
        if (($model = splr::findOne(['id_supplier' => $id_supplier])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
