<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Trouve */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trouve-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->dropDownList([ 'chat' => 'Chat', 'chien' => 'Chien', 'autre' => 'Autre', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'race')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'couleur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lieu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'utilisateur')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
