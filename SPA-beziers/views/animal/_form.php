<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Animal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idanimal')->textInput() ?>

    <?= $form->field($model, 'type')->dropDownList([ 'chat' => 'Chat', 'chien' => 'Chien', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'zone')->dropDownList([ 'fourriere' => 'Fourriere', 'spa' => 'Spa', 'fa' => 'Fa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'etat')->dropDownList([ 'adopte+' => 'Adopte+', 'adopte-' => 'Adopte-', 'adoptable' => 'Adoptable', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexe')->dropDownList([ 'mâle' => 'Mâle', 'femelle' => 'Femelle', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sterilise')->dropDownList([ 'oui' => 'Oui', 'non' => 'Non', 'inconnu' => 'Inconnu', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'dateNaissance')->textInput() ?>

    <?= $form->field($model, 'race')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ententeChiens')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ententeChats')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ententeEnfants')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chienDuMois')->textInput() ?>

    <?= $form->field($model, 'coupDeCoeur')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
