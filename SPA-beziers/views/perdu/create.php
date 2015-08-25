<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Perdu */

$this->title = 'Create Perdu';
$this->params['breadcrumbs'][] = ['label' => 'Perdus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perdu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
