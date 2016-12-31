<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\State;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->input('email')  ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'state')->dropDownList(ArrayHelper::map(State::find()->all(),'name','name')) ?>

    <?= $form->field($model, 'zipCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roles')->dropdownList([
        1 => '1',
        2 => '2'
    ],
        ['prompt'=>'Select a Rol']
    );?>
    <?= $form->field($model, 'phone')->input('text')  ?>


    <?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->dropdownList([
        1 => 'Male',
        2 => 'Female'
    ],
        ['prompt'=>'Select a Gender']
    );?>

    <?= $form->field($model, 'ssn')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create User' : 'Update User', ['class' => $model->isNewRecord ? 'btn btn-3d btn-green' : 'btn btn-3d btn-dirtygreen']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
