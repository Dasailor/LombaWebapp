<?php

namespace backend\controllers;

use Yii;
use app\models\JenisNilai;
use app\models\JenisNilaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JenisNilaiController implements the CRUD actions for JenisNilai model.
 */
class JenisNilaiController extends Controller
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
     * Lists all JenisNilai models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JenisNilaiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JenisNilai model.
     * @param integer $id
     * @param string $jenis_nilai
     * @return mixed
     */
    public function actionView($id, $jenis_nilai)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $jenis_nilai),
        ]);
    }

    /**
     * Creates a new JenisNilai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JenisNilai();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'jenis_nilai' => $model->jenis_nilai]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing JenisNilai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param string $jenis_nilai
     * @return mixed
     */
    public function actionUpdate($id, $jenis_nilai)
    {
        $model = $this->findModel($id, $jenis_nilai);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'jenis_nilai' => $model->jenis_nilai]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing JenisNilai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param string $jenis_nilai
     * @return mixed
     */
    public function actionDelete($id, $jenis_nilai)
    {
        $this->findModel($id, $jenis_nilai)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JenisNilai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param string $jenis_nilai
     * @return JenisNilai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $jenis_nilai)
    {
        if (($model = JenisNilai::findOne(['id' => $id, 'jenis_nilai' => $jenis_nilai])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
