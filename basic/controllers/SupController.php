<?php

namespace app\Controllers;

use app\models\Splr;
use app\models\SplrSearch;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * SplrController implements the CRUD actions for Splr model.
 */
class SupController extends Controller
{
   

    /**
     * Lists all Splr models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SplrSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('/splr/index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Splr model.
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
     * Creates a new Splr model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Splr();

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
     * Updates an existing Splr model.
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
     * Deletes an existing Splr model.
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

    
}
