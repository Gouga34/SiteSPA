<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Perdu */

$this->title = 'Update Perdu: ' . ' ' . $model->idperdu;
$this->params['breadcrumbs'][] = ['label' => 'Perdus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idperdu, 'url' => ['view', 'id' => $model->idperdu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perdu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
