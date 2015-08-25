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
        <?= Html::a('Create Trouve', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtrouve',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
