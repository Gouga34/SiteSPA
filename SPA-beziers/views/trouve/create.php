<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Trouve */

$this->title = 'Create Trouve';
$this->params['breadcrumbs'][] = ['label' => 'Trouves', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trouve-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
