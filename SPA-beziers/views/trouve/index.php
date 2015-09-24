<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TrouveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trouves';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trouve-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a('Create Trouve', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <?php 
        $template="{view} {link}";
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'photo',
                'format' => 'raw',
                'value' => function($model){
                    $url=\Yii::$app->request->BaseUrl.'/images/trouves/'.$model->photo;
                    return Html::a(Html::img($url,['alt'=>($model->photo),'style' => 'width:150px;', 'class' => 'img-thumbnail']), ['perdu/view','id'=> $model->idtrouve]);
               
                }
            ],
            'type',
            'nom',
            'age',
            'race',
            // 'couleur',
            // 'identification',
            // 'lieu',
            // 'date',
            // 'photo',
            // 'description:ntext',
            // 'utilisateur',

            ['class' => 'yii\grid\ActionColumn',
            'template' => $template],
        ],
    ]); ?>

</div>
