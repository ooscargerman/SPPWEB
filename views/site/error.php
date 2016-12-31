<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<section id="middle">


    <!-- page title -->
    <header id="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </header>
    <!-- /page title -->


    <div id="content" class="padding-20">

        <div class="panel panel-default">
            <div class="panel-body">

                <p class="lead">
                    <span class="e404">Oops!</span>
                    <strong>Something went wrong.</strong> <br />
                    <?= nl2br(Html::encode($message)) ?>
                </p>

            </div>
        </div>

    </div>
</section>
<!-- /MIDDLE -->
</div>