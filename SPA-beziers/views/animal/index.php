<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnimalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Animals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Animal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idAnimal',
            'type',
            'zone',
            'etat',
            'nom',
            // 'sexe',
            // 'sterilise',
            // 'dateNaissance',
            // 'race',
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
