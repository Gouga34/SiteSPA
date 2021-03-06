<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\SqlDataProvider;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AnimalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Animaux';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //echo  Html::a('Create Animal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
        $count=Yii::$app->db->createCommand("SELECT COUNT idAnimal FROM Animal WHERE etat='adoptable' AND type='chien'");
        $dataProvider=new SqlDataProvider([
                'sql' => "SELECT *
                          FROM animal, animal_photo, photo
                          WHERE etat='adoptable'
                          AND type='chien'",
                'totalCount' => $count,
                'pagination' => false,
            ]);
    ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'idanimal',
            'photo',
            'nom',            
            'sexe',
            // 'sterilise',
            'dateNaissance',
            'race',
            // 'description:ntext',
            // 'ententeChiens',
            // 'ententeChats',
            // 'ententeEnfants',
            // 'chienDuMois',
            // 'coupDeCoeur',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
