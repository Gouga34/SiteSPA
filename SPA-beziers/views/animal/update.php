<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Animal */

$this->title = 'Update Animal: ' . ' ' . $model->idanimal;
$this->params['breadcrumbs'][] = ['label' => 'Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idanimal, 'url' => ['view', 'id' => $model->idanimal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="animal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
