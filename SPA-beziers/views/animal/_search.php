<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnimalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idanimal') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'zone') ?>

    <?= $form->field($model, 'etat') ?>

    <?= $form->field($model, 'nom') ?>

    <?php // echo $form->field($model, 'sexe') ?>

    <?php // echo $form->field($model, 'sterilise') ?>

    <?php // echo $form->field($model, 'dateNaissance') ?>

    <?php // echo $form->field($model, 'race') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'ententeChiens') ?>

    <?php // echo $form->field($model, 'ententeChats') ?>

    <?php // echo $form->field($model, 'ententeEnfants') ?>

    <?php // echo $form->field($model, 'chienDuMois') ?>

    <?php // echo $form->field($model, 'coupDeCoeur') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
