<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>


    <div class="padding-15">

        <div class="login-box">

            <!-- login form -->
            <div class="sky-form boxed">
                <header><i class="fa fa-users"></i> Sign In</header>

                <!--
                <div class="alert alert-danger noborder text-center weight-400 nomargin noradius">
                    Invalid Email or Password!
                </div>

                <div class="alert alert-warning noborder text-center weight-400 nomargin noradius">
                    Account Inactive!
                </div>

                <div class="alert alert-default noborder text-center weight-400 nomargin noradius">
                    <strong>Too many failures!</strong> <br />
                    Please wait: <span class="inlineCountdown" data-seconds="180"></span>
                </div>
                -->

                <fieldset>
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'layout' => 'horizontal',
                        'fieldConfig' => [

                            'template' => "<label class=\"input\"><i class=\"icon-append fa fa-envelope\"></i>{input}</label></label>\n<div class=\"col-lg-8\">{error}</div>",

                            'labelOptions' => ['class' => 'col-lg-1 control-label'],
                        ],
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "{input} {label}\n<div class=\"col-lg-8\">{error}</div>",
                    ]) ?>





                </fieldset>

                <footer>
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary pull-right', 'name' => 'login-button']) ?>
                    <?php ActiveForm::end(); ?>

                    <div class="forgot-password pull-left">
                        <a href="page-password.html">Forgot password?</a> <br />
                        <a href="page-register.html"><b>Need to Register?</b></a>
                    </div>
                </footer>
            </div>
            <!-- /login form -->

            <hr />

            <div class="text-center">
                Or sign in using:
            </div>


            <div class="socials margin-top-10 text-center"><!-- more buttons: ui-buttons.html -->
                <a href="#" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                <a href="#" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
            </div>

        </div>
</div>