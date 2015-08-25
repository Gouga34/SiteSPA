<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PerduSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perdu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idperdu') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'nom') ?>

    <?= $form->field($model, 'age') ?>

    <?= $form->field($model, 'race') ?>

    <?php // echo $form->field($model, 'couleur') ?>

    <?php // echo $form->field($model, 'identification') ?>

    <?php // echo $form->field($model, 'lieu') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'utilisateur') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
