<?php

namespace app\controllers;

use Yii;
use app\models\AnimalPhoto;
use app\models\AnimalPhotoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AnimalPhotoController implements the CRUD actions for AnimalPhoto model.
 */
class AnimalPhotoController extends Controller
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
     * Lists all AnimalPhoto models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AnimalPhotoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AnimalPhoto model.
     * @param integer $idanimal
     * @param integer $idphoto
     * @return mixed
     */
    public function actionView($idanimal, $idphoto)
    {
        return $this->render('view', [
            'model' => $this->findModel($idanimal, $idphoto),
        ]);
    }

    /**
     * Creates a new AnimalPhoto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AnimalPhoto();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idanimal' => $model->idanimal, 'idphoto' => $model->idphoto]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AnimalPhoto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idanimal
     * @param integer $idphoto
     * @return mixed
     */
    public function actionUpdate($idanimal, $idphoto)
    {
        $model = $this->findModel($idanimal, $idphoto);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idanimal' => $model->idanimal, 'idphoto' => $model->idphoto]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AnimalPhoto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idanimal
     * @param integer $idphoto
     * @return mixed
     */
    public function actionDelete($idanimal, $idphoto)
    {
        $this->findModel($idanimal, $idphoto)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AnimalPhoto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idanimal
     * @param integer $idphoto
     * @return AnimalPhoto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idanimal, $idphoto)
    {
        if (($model = AnimalPhoto::findOne(['idanimal' => $idanimal, 'idphoto' => $idphoto])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
