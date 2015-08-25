<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AnimalPhoto */

$this->title = 'Create Animal Photo';
$this->params['breadcrumbs'][] = ['label' => 'Animal Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animal-photo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
