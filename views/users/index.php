<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
    <section id="middle">


        <!-- page title -->
        <header id="page-header">
            <h1>Users List</h1>
            <ol class="breadcrumb">
                <li><a href="#"><?= Html::encode($this->title) ?></a></li>
                <li class="active">Users List</li>
            </ol>
        </header>
        <!-- /page title -->


        <div id="content" class="padding-20">

            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="row">
                        <!-- CALLOUT -->
                        <div class="callout ">

                            <div class="row">

                                <div class="col-md-12 col-sm-12"><!-- left text -->
                                    <a href="create" class="btn btn-3d btn-lg btn-reveal btn-green">
                                        <i class="fa fa-user-plus"></i>
                                        <span>Create</span>
                                    </a>
                                    <a id="seatchButton" onClick="divFunction()" class="btn btn-3d btn-lg btn-reveal btn-blue">
                                        <i class="fa fa-search"></i>
                                        <span>Search</span>
                                    </a>
                                    <hr class="half-margins invisible" />

                                    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
                                    <hr />
                                </div><!-- /left text -->



                            </div>

                        </div>
                        <!-- /CALLOUT -->
                        <!-- LEFT -->
                        <div class="col-md-9">

                            <h2><strong>Users</strong></h2>
                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    //'id',
                                    'folioId',
                                    'username',
                                    //'password',
                                    'email:email',
                                    'address',
                                    // 'city',
                                    // 'state',
                                    // 'zipCode',
                                    // 'roles',
                                    // 'phone',
                                    // 'registerDate',
                                    // 'firstName',
                                    // 'lastName',
                                    // 'ssn',
                                    // 'deleted',

                                    ['class' => 'yii\grid\ActionColumn'],
                                ],
                            ]); ?>
                            <hr class="half-margins invisible" />





                            <!-- FEATURED BOXES 3 -->
                            <div class="row featured-box-minimal">

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <h4><i class="fa fa-group"></i> &nbsp; Customer Support</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <h4><i class="fa fa-code"></i> &nbsp; HTML5 / CSS3</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <h4><i class="fa fa-bars"></i> &nbsp; Buttons</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
                                </div>


                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <h4><i class="fa fa-google-plus"></i> &nbsp; Google Fonts</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <h4><i class="fa fa-check"></i> &nbsp; Icons</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <h4><i class="fa fa-desktop"></i> &nbsp; Lightbox</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
                                </div>

                            </div>
                            <!-- /FEATURED BOXES 3 -->

                        </div>
                        <!-- /LEFT -->

                        <!-- RIGHT -->
                        <div class="col-md-3 sidebar">

                            <!-- IMAGES -->
                            <h3>Recent Images</h3>
                            <ul class="list-inline aside-thumbs clearfix">
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a1.jpg" height="50" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a2.jpg" height="50" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a3.jpg" height="50" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a4.jpg" height="50" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a5.jpg" height="50" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a6.jpg" height="50" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a7.jpg" height="50" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a8.jpg" height="50" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a1.jpg" height="50" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a2.jpg" height="50" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a3.jpg" height="50" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a4.jpg" height="50" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a5.jpg" height="50" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="" src="assets/images/demo/portfolio/thumb/small_a6.jpg" height="50" />
                                    </a>
                                </li>
                            </ul>
                            <!-- /IMAGES -->


                            <!-- TABS -->
                            <h3>Tabs</h3>
                            <div class="aside-tabs clearfix">

                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#aside_tab_1">Section 1 </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#aside_tab_2">Section 2 </a>
                                    </li>
                                </ul>

                                <div class="tab-content">

                                    <div id="aside_tab_1" class="tab-pane active">
                                        <p>
                                            Hello, I am tab #1
                                        </p>
                                        <p>
                                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
                                        </p>
                                    </div>

                                    <div id="aside_tab_2" class="tab-pane">
                                        <p>
                                            Howdy, I am tab #1
                                        </p>
                                        <p>
                                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                                        </p>
                                    </div>

                                </div>

                            </div>
                            <!-- /TABS -->


                            <!-- TWITTER -->
                            <h3>Recent Twitts</h3>
                            <div class="aside-twitter margin-top20">

                                <div class="twitter-item">
                                    <a href="#"><i class="fa fa-twitter"></i> @stepofweb </a>
                                    <p>At vero eos et accusamus et iusto odio.</p>
                                    <a href="#"><em>http://t.co/aBcDeFgH</em></a>
                                    &nbsp; &bull; &nbsp; <span class="note">5 hours ago </span>
                                </div>

                                <div class="twitter-item">
                                    <a href="#"><i class="fa fa-twitter"></i> @stepofweb </a>
                                    <p>At vero eos et accusamus et iusto odio.</p>
                                    <a href="#"><em>http://t.co/aBcDeFgH</em></a>
                                    &nbsp; &bull; &nbsp; <span class="note">8 hours ago </span>
                                </div>

                                <div class="twitter-item">
                                    <a href="#"><i class="fa fa-twitter"></i> @stepofweb </a>
                                    <p>At vero eos et accusamus et iusto odio.</p>
                                    <a href="#"><em>http://t.co/aBcDeFgH</em></a>
                                    &nbsp; &bull; &nbsp; <span class="note">9 hours ago </span>
                                </div>

                            </div>
                            <!-- /TWITTER -->


                        </div>
                        <!-- /RIGHT -->

                    </div>


                </div>
            </div>

        </div>
    </section>
    <!-- /MIDDLE -->

    </div>
<script>
    function divFunction(){
        //Some code
        $("#search").removeClass("hidden");
    }

</script>