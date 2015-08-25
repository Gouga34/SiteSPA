<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UtilisateurSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Utilisateurs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utilisateur-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Utilisateur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'type',
            'mdp',
            'nom',
            'prenom',
            'mail',
            // 'telephone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>