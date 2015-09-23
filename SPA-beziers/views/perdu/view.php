<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Perdu */

$this->title = $model->nom;
$this->params['breadcrumbs'][] = ['label' => 'Perdus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perdu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php // Html::a('Update', ['update', 'id' => $model->idperdu], ['class' => 'btn btn-primary']) ?>
        <?php // Html::a('Delete', ['delete', 'id' => $model->idperdu], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => 'Are you sure you want to delete this item?',
//                'method' => 'post',
//            ],
//        ]) ?>
    </p>

     <?php
        $url=\Yii::$app->request->BaseUrl.'/images/perdus/'.$model->photo;
        echo Html::img($url,
                    ['alt'=>($model->photo),
                     'style' => 'width:auto;height:400px;color:white; margin-bottom:3%;', 
                     'class' => "img-responsive center-block"]);
    ?>
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'type',
            'nom',
            'age',
            'race',
            'couleur',
            'identification',
            'lieu',
            'date',
            'photo',
            'description:ntext',
            'utilisateur',
        ],
    ]) ?>

</div>
