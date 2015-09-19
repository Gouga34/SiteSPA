<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Animal */

$this->title = $model->nom;
($model->type==='chien')? $this->params['breadcrumbs'][] = ['label' => 'Chiens à l\'adoption', 'url' => ['index-chiens']] 
    : $this->params['breadcrumbs'][] = ['label' => 'Chats à l\'adoption', 'url' => ['index-chats']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php //Html::a('Update', ['update', 'id' => $model->idanimal], ['class' => 'btn btn-primary']) ?>
        <?php //Html::a('Delete', ['delete', 'id' => $model->idanimal], [
        //     'class' => 'btn btn-danger',
        //     'data' => [
        //         'confirm' => 'Are you sure you want to delete this item?',
        //         'method' => 'post',
        //     ],
        // ]) ?>
    </p>
    <div id="carouselAnimal">
    <?php
        $images[]=null;
        $i=0;
        foreach ($photos as $photo) {
            $images[$i]=[
                'content' => "<img src=\"./images/".$model->type."s/".$photo['photo']."\">", 
                'options' => ['style' => 'width:500px;height:500px;background-color:#5f666d;color:white;margin:0px auto']

            ];
            $i++;
        }
        echo yii\bootstrap\Carousel::widget([
            'items'=>$images,
        ]);

    ?>
</div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idanimal',
            // 'type',
            'zone',
            'etat',
            'nom',
            'sexe',
            'sterilise',
            'dateNaissance',
            'race',
            'description:ntext',
            'ententeChiens',
            'ententeChats',
            'ententeEnfants',
        ],
    ]) ?>

    <?php
        if($model->chienDuMois){
            echo "<p><i>Ce chien est le chien du mois</i></p>";
        }
        if($model->coupDeCoeur){
            echo "<p><i>Ce chien est un chien coup de coeur</i></p>";
        }
    ?>

</div>
