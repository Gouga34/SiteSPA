<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AnimalPhoto */

$this->title = $model->idanimal;
$this->params['breadcrumbs'][] = ['label' => 'Animal Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-photo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idanimal' => $model->idanimal, 'idphoto' => $model->idphoto], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idanimal' => $model->idanimal, 'idphoto' => $model->idphoto], [
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
            'idanimal',
            'idphoto',
        ],
    ]) ?>

</div>
