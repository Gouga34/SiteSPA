<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PerduSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perdus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perdu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //echo Html::a('Create Perdu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idperdu',
            [
                'attribute' => 'photo',
                'format' => 'raw',
                'value' => function($model){
                    $url=\Yii::$app->request->BaseUrl.'/images/perdus/'.$model->photo;
                    return Html::img($url,['alt'=>($model->photo),'style' => 'width:100px;', 'class' => 'img-thumbnail']);
               
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
            // 'description:ntext',
            // 'utilisateur',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
