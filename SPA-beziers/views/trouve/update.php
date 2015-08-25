<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trouve */

$this->title = 'Update Trouve: ' . ' ' . $model->idtrouve;
$this->params['breadcrumbs'][] = ['label' => 'Trouves', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtrouve, 'url' => ['view', 'id' => $model->idtrouve]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trouve-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
