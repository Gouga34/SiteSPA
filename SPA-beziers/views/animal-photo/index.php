<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnimalPhotoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Animal Photos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-photo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Animal Photo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idanimal',
            'idphoto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
