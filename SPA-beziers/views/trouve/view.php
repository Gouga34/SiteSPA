<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Trouve */

$this->title = $model->idtrouve;
$this->params['breadcrumbs'][] = ['label' => 'Trouves', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trouve-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idtrouve], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idtrouve], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idtrouve',
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
