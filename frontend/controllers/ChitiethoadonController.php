<?php

namespace app\controllers;

use Yii;
use app\models\Chitiethoadon;
use app\models\ChitiethoadonSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChitiethoadonController implements the CRUD actions for Chitiethoadon model.
 */
class ChitiethoadonController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Chitiethoadon models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChitiethoadonSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Chitiethoadon model.
     * @param string $MaSP
     * @param string $MaHD
     * @return mixed
     */
    public function actionView($MaSP, $MaHD)
    {
        return $this->render('view', [
            'model' => $this->findModel($MaSP, $MaHD),
        ]);
    }

    /**
     * Creates a new Chitiethoadon model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Chitiethoadon();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MaSP' => $model->MaSP, 'MaHD' => $model->MaHD]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Chitiethoadon model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $MaSP
     * @param string $MaHD
     * @return mixed
     */
    public function actionUpdate($MaSP, $MaHD)
    {
        $model = $this->findModel($MaSP, $MaHD);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MaSP' => $model->MaSP, 'MaHD' => $model->MaHD]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Chitiethoadon model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $MaSP
     * @param string $MaHD
     * @return mixed
     */
    public function actionDelete($MaSP, $MaHD)
    {
        $this->findModel($MaSP, $MaHD)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Chitiethoadon model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $MaSP
     * @param string $MaHD
     * @return Chitiethoadon the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($MaSP, $MaHD)
    {
        if (($model = Chitiethoadon::findOne(['MaSP' => $MaSP, 'MaHD' => $MaHD])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
