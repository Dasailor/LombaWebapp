<?php

namespace backend\controllers;

use Yii;
use app\models\Nilai;
use app\models\NilaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NilaiController implements the CRUD actions for Nilai model.
 */
class NilaiController extends Controller
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
     * Lists all Nilai models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NilaiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Nilai model.
     * @param integer $id
     * @param integer $peserta_id
     * @param integer $juri_id
     * @param integer $jenis_nilai_id
     * @return mixed
     */
    public function actionView($id, $peserta_id, $juri_id, $jenis_nilai_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $peserta_id, $juri_id, $jenis_nilai_id),
        ]);
    }

    /**
     * Creates a new Nilai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Nilai();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'peserta_id' => $model->peserta_id, 'juri_id' => $model->juri_id, 'jenis_nilai_id' => $model->jenis_nilai_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Nilai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $peserta_id
     * @param integer $juri_id
     * @param integer $jenis_nilai_id
     * @return mixed
     */
    public function actionUpdate($id, $peserta_id, $juri_id, $jenis_nilai_id)
    {
        $model = $this->findModel($id, $peserta_id, $juri_id, $jenis_nilai_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'peserta_id' => $model->peserta_id, 'juri_id' => $model->juri_id, 'jenis_nilai_id' => $model->jenis_nilai_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Nilai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $peserta_id
     * @param integer $juri_id
     * @param integer $jenis_nilai_id
     * @return mixed
     */
    public function actionDelete($id, $peserta_id, $juri_id, $jenis_nilai_id)
    {
        $this->findModel($id, $peserta_id, $juri_id, $jenis_nilai_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Nilai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $peserta_id
     * @param integer $juri_id
     * @param integer $jenis_nilai_id
     * @return Nilai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $peserta_id, $juri_id, $jenis_nilai_id)
    {
        if (($model = Nilai::findOne(['id' => $id, 'peserta_id' => $peserta_id, 'juri_id' => $juri_id, 'jenis_nilai_id' => $jenis_nilai_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
