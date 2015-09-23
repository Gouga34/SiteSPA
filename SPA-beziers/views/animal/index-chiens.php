<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\SqlDataProvider;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AnimalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = "Chiens à l'adoption";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //echo  Html::a('Create Animal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?php
        $template='{view} {link}';
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'idanimal',
            [
                'attribute' => 'Photo',
                'format' => 'raw',
                'value' => function($model){
                    $req="SELECT p.photo 
                          FROM animal a, photo p, animal_photo ap 
                          WHERE a.idanimal=".$model['idanimal']."
                          AND a.idanimal=ap.idanimal
                          AND ap.idphoto=p.idphoto";
                    $result = Yii::$app->db->createCommand($req)->queryScalar();
                    $url=\Yii::$app->request->BaseUrl.'/images/chiens/'.$result;
                    return Html::img($url,['alt'=>$model['nom'],'style' => 'width:100px;', 'class' => 'img-thumbnail']);
                }
            ],
            [
                'attribute' =>'Nom',
                'format' => 'raw',
                'value'=> function($model){
                    return Html::a($model['nom'], ['animal/view', 'id' => $model['idanimal']]);
                }

            ],            
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

            ['class' => 'yii\grid\ActionColumn',
            'template' => $template],
        ],
    ]); ?>

</div>
