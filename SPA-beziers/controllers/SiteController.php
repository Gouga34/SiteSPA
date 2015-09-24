<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
       
        $sauvetages = $this->getSauvetages();
        
        $animalDuMois=$this->getAnimalMois();
        
        $anniversaire = $this->getAnniversaire();
        
        return $this->render('index',[
            'sauvetages'=>$sauvetages,
            'animalDuMois'=>$animalDuMois,
            'anniversaire' => $anniversaire
        ]);
    }
    
    /**
     * 
     * @return les photos de l'animal dont c'est l'anniversaire 
     */
    private function getAnniversaire(){
         $req="SELECT p.photo, a.type, a.nom "
           . "FROM animal a, photo p, animal_photo ap "
           . "WHERE a.idanimal=ap.idanimal "
           . "AND ap.idphoto = p.idphoto "
           . "AND a.etat='adoptable'"
           . "AND month(dateNaissance)=month(current_date) "
           . "AND day(dateNaissance)=day(current_date)";
        return Yii::$app->db->createCommand($req)->queryAll();
    }
    
    /**
     * 
     * @return les photos de l'animal du mois
     */
    private function getAnimalMois(){
        $req="SELECT p.photo, a.type, a.nom "
           . "FROM animal a, photo p, animal_photo ap "
           . "WHERE a.idanimal=ap.idanimal "
           . "AND ap.idphoto=p.idphoto "
           . "AND a.etat='adoptable' "
           . "AND a.chienDuMois=1 ";
        return Yii::$app->db->createCommand($req)->queryAll();
    }
    
    /**
     * 
     * @return la liste des sauvetages (tableau)
     */
    private function getSauvetages(){
        $req="SELECT min(p.photo) as photo, a.type, a.nom "
           . "FROM animal a, photo p, animal_photo ap "
           . "WHERE a.idanimal=ap.idanimal "
           . "AND ap.idphoto=p.idphoto "
           . "AND a.etat='adoptable' "
           . "AND a.coupDeCoeur=1 "
           . "GROUP BY a.nom";
        return Yii::$app->db->createCommand($req)->queryAll();
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionDevenirBenevole(){
        return $this->render('devenir-benevole');
    }
    
    public function actionFaireUnDon(){
        return $this->render('faire-un-don');
    }
    
    public function actionPerduChat(){
        return $this->render('perdu-chat');
    }
    
}
