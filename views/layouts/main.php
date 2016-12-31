<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?= Html::csrfMetaTags() ?>

    <!-- WEB FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />
    <!-- JAVASCRIPT FILES -->

    <script type="text/javascript">var plugin_path = '/plugins/';</script>
</head>
<body>
<?php $this->beginBody() ?>
<div id="wrapper">
    <?/*php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();*/
    ?>
    <?php if(Yii::$app->user->isGuest){ ?>

    <?php }else{?>
        <aside id="aside">
            <!--
                Always open:
                <li class="active alays-open">

                LABELS:
                    <span class="label label-danger pull-right">1</span>
                    <span class="label label-default pull-right">1</span>
                    <span class="label label-warning pull-right">1</span>
                    <span class="label label-success pull-right">1</span>
                    <span class="label label-info pull-right">1</span>
            -->
            <nav id="sideNav"><!-- MAIN MENU -->
                <ul class="nav nav-list">
                    <li class="active"><!-- dashboard -->
                        <a class="dashboard" href="/"><!-- warning - url used by default by ajax (if eneabled) -->
                            <i class="main-icon fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-menu-arrow pull-right"></i>
                            <i class="main-icon fa fa-user"></i> <span>Users</span>
                        </a>
                        <ul><!-- submenus -->
                            <li><a href="/users/create"><i class="fa fa-user-plus"></i> Create User  </a></li>
                            <li><a href="/users/"><i class="fa fa-users"></i> Users List</a></li>


                        </ul>
                    </li>
                    </ul>

                <!-- SECOND MAIN LIST -->
                <h3>MORE</h3>
                <ul class="nav nav-list">
                    <li>
                        <a href="calendar.html">
                            <i class="main-icon fa fa-calendar"></i>
                            <span class="label label-warning pull-right">2</span> <span>Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../HTML/start.html">
                            <i class="main-icon fa fa-link"></i>
                            <span class="label label-danger pull-right">PRO</span> <span>Frontend</span>
                        </a>
                    </li>
                </ul>

            </nav>

            <span id="asidebg"><!-- aside fixed background --></span>
        </aside>
        <!-- /ASIDE -->


        <!-- HEADER -->
        <header id="header">

            <!-- Mobile Button -->
            <button id="mobileMenuBtn"></button>

            <!-- Logo -->
            <span class="logo pull-left">
					<img src="/images/logo_light.png" alt="admin panel" height="35" />
				</span>

            <form method="get" action="page-search.html" class="search pull-left hidden-xs">
                <input type="text" class="form-control" name="k" placeholder="Search for something..." />
            </form>

            <nav>

                <!-- OPTIONS LIST -->
                <ul class="nav pull-right">

                    <!-- USER OPTIONS -->
                    <li class="dropdown pull-left">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img class="user-avatar" alt="" src="/images/noavatar.jpg" height="34" />
                            <span class="user-name">
									<span class="hidden-xs">
									<?= Yii::$app->user->isGuest ? ("Guest") :	Yii::$app->user->identity->username ?> <i class="fa fa-angle-down"></i>
									</span>
								</span>
                        </a>
                        <ul class="dropdown-menu hold-on-click">
                            <li><!-- my calendar -->
                                <a href="calendar.html"><i class="fa fa-calendar"></i> Calendar</a>
                            </li>
                            <li><!-- my inbox -->
                                <a href="#"><i class="fa fa-envelope"></i> Inbox
                                    <span class="pull-right label label-default">0</span>
                                </a>
                            </li>
                            <li><!-- settings -->
                                <a href="page-user-profile.html"><i class="fa fa-cogs"></i> Settings</a>
                            </li>

                            <li class="divider"></li>

                            <li><!-- lockscreen -->
                                <a href="page-lock.html"><i class="fa fa-lock"></i> Lock Screen</a>
                            </li>
                            <?php

                            echo Nav::widget([
                                'options' => ['class' => ''],
                                'items' => [

                                    Yii::$app->user->isGuest ? (
                                    ['label' => 'Login', 'url' => ['/site/login']]
                                    ) : (
                                        '<li>'
                                        . Html::beginForm(['/site/logout'], 'post')
                                        . Html::submitButton(
                                            '<i class="fa fa-power-off"></i> Logout (' . Yii::$app->user->identity->username . ')',
                                            ['class' => 'btn btn-link logout']
                                        )
                                        . Html::endForm()
                                        . '</li>'
                                    )
                                ],
                            ]);

                            ?>

                        </ul>
                    </li>
                    <!-- /USER OPTIONS -->

                </ul>
                <!-- /OPTIONS LIST -->

            </nav>

        </header>
    <?php }?>
    <!-- /HEADER -->


        <?= $content ?>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
