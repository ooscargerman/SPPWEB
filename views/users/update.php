<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = 'Update User: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<section id="middle">


        <!-- page title -->
        <header id="page-header">
            <h1><?= Html::encode($this->title) ?></h1>
            <ol class="breadcrumb">
                <li><a href="#">Users</a></li>
                <li class="active"><?= Html::encode($this->title) ?></li>
            </ol>
        </header>
        <!-- /page title -->


        <div id="content" class="padding-20">

            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="row">

                        <!-- LEFT -->
                        <div class="col-md-9">

                            <h2><strong><?= Html::encode($this->title) ?></strong> </h2>
                            <?= $this->render('_form', [
                                'model' => $model,
                            ]) ?>

                            <hr class="half-margins invisible" />

                            <!-- CALLOUT -->
                            <div class="alert callout alert-default fade in">

                                <div class="row">

                                    <div class="col-md-9 col-sm-9"><!-- left text -->
                                        <h4><strong>You know</strong> you like FastAdmin!</h4>
                                        <p>
                                            Purchase now and get lifetime update! We are constantly improving FastAdmin for you.
                                        </p>
                                    </div><!-- /left text -->


                                    <div class="col-md-3 col-sm-3 text-right"><!-- right btn -->
                                        <a href="#purchase" rel="nofollow" target="_blank" class="btn btn-danger btn-lg">PURCHASE NOW</a>
                                    </div><!-- /right btn -->

                                </div>

                            </div>
                            <!-- /CALLOUT -->

                            <hr class="half-margins invisible" />

                            <img class="pull-left" src="assets/images/demo/17.jpg" width="250" alt="" />
                            <p>Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci.</p>
                            <p>Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula, lacus justo semper libero, quis porttitor turpis odio sit amet ligula. Duis dapibus fermentum orci, nec malesuada libero vehicula ut. Integer sodales, urna eget interdum eleifend, nulla nibh laoreet nisl, quis dignissim mauris dolor eget mi. Donec at mauris enim. Duis nisi tellus, adipiscing a convallis quis, tristique vitae risus. Nullam molestie gravida lobortis. Proin ut nibh quis felis auctor ornare. Cras ultricies, nibh at mollis faucibus, justo eros porttitor mi, quis auctor lectus arcu sit amet nunc. Vivamus gravida vehicula arcu, vitae vulputate augue lacinia faucibus.</p>
                            <p>Ut porttitor euismod cursus. Mauris suscipit, turpis ut dapibus rhoncus, odio erat egestas orci, in sollicitudin enim erat id est. Sed auctor gravida arcu, nec fringilla orci aliquet ut. Nullam eu pretium purus. Maecenas fermentum posuere sem vel posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare convallis lectus a faucibus. Praesent et urna turpis. Fusce tincidunt augue in velit tincidunt sed tempor felis porta. Nunc sodales, metus ut vestibulum ornare, est magna laoreet lectus, ut adipiscing massa odio sed turpis. In nec lorem porttitor urna consequat sagittis. Nullam eget elit ante. Pellentesque justo urna, semper nec faucibus sit amet, aliquam at mi. Maecenas eget dim pharetra.</p>

                            <hr />

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