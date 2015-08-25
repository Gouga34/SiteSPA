<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnimalPhoto */

$this->title = 'Update Animal Photo: ' . ' ' . $model->idanimal;
$this->params['breadcrumbs'][] = ['label' => 'Animal Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idanimal, 'url' => ['view', 'idanimal' => $model->idanimal, 'idphoto' => $model->idphoto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="animal-photo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
