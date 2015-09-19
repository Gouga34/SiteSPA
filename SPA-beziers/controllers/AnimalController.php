<?php

namespace app\controllers;

use Yii;
use app\models\Animal;
use app\models\AnimalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\SqlDataProvider;
/**
 * AnimalController implements the CRUD actions for Animal model.
 */
class AnimalController extends Controller
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
     * Lists all Animal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AnimalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all adoptable dogs
     * @return mixed
     */
    public function actionIndexChiens()
    {
        $searchModel = new AnimalSearch();
        $count=Yii::$app->db->createCommand("SELECT COUNT(distinct idAnimal) FROM Animal WHERE etat='adoptable' AND type='chien'");
        $dataProvider=new SqlDataProvider([
                'sql' => "SELECT *
                          FROM animal a
                          WHERE a.etat='adoptable'
                          AND a.type='chien'",
                'totalCount' => $count,
                'pagination' => false,
            ]);

        return $this->render('index-chiens', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all adoptable cats
     * @return mixed
     */
    public function actionIndexChats()
    {
        $searchModel = new AnimalSearch();
        $count=Yii::$app->db->createCommand("SELECT COUNT (distinct idanimal) FROM Animal WHERE etat='adoptable' AND type='chat'");
        $dataProvider=new SqlDataProvider([
                'sql' => "SELECT *
                          FROM animal a
                          WHERE a.etat='adoptable'
                          AND a.type='chat'",
                'totalCount' => $count,
                'pagination' => false,
            ]);

        return $this->render('index-chats', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Animal model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {

        $req="SELECT photo 
              FROM photo p, animal a, animal_photo ap 
              WHERE a.idanimal=ap.idanimal
              AND ap.idphoto=p.idphoto";

        $photos=Yii::$app->db->createCommand($req)->queryAll();  

        return $this->render('view', [
            'model' => $this->findModel($id),
            'photos'=> $photos,
        ]);
    }

    /**
     * Creates a new Animal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Animal();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idanimal]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Animal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idanimal]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Animal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Animal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Animal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Animal::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
