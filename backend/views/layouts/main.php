<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use common\models\User;
use common\models\Contact;


$users = User::find()->all();
$contacts = Contact::find()->all();


$countmessage = count($contacts);
$count = count($users);


AppAsset::register($this);
?>




<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="/../backend/web/css/global/simple-line-icons.css" rel="stylesheet" type="text/css" />
    <link href="/../backend/web/css/global/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/../backend/web/css/global/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="/../backend/web/img/shortcuticon.png" type="image/png">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!---->
<!--<div class="wrap">-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'FAQ', 'url' => ['/questions/index']],
//        ['label' => 'Гарантия', 'url' => ['/guarantee/index']],
//    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
//    }
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => $menuItems,
//    ]);
//    NavBar::end();
//    ?>
<!---->
<!--    <div class="container">-->
<!--        --><?//= Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]) ?>
<!--        --><?//= Alert::widget() ?>
<!--        --><?//= $content ?>
<!--    </div>-->
<!--</div>-->


<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo" style="text-align: center;">
            <a href="<?= \yii\helpers\Url::to(['/site'])?>">
                <img src="/../backend/web/img/logo.png" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <?php if (!Yii::$app->user->isGuest && Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId())['admin']->name == 'admin'): ?>
            <div class="note note-danger pull-left" style="background-color: #e7505a;">Администратор</div>
            <ul class="nav navbar-nav pull-left ">
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle btn green" style="padding: 0;margin-top: 10px;margin-left: 10px; border-radius: 4px; color: white;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

                        <span class="btn  green btn-sm btn-outline text-white" style="color: white;">Управления с пользователями <i class="fa fa-angle-down"></i></span>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-default pull-right" role="menu">
                        <li>
                            <a href="<?= \yii\helpers\Url::to(['/rbac/user'])?>">
                                <i class="icon-users"></i> Пользователи<span class="badge badge-warning"><?php echo $count;?></span></a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="<?= \yii\helpers\Url::to(['/rbac/assignment'])?>">
                                <i class="icon-link"></i>Назначение </a>
                        </li>
                        <li>
                            <a href="<?= \yii\helpers\Url::to(['/rbac/role'])?>">
                                <i class="icon-fire"></i> Роли</a>
                        </li>
                        <li>
                            <a href="<?= \yii\helpers\Url::to(['/rbac/permission'])?>">
                                <i class="icon-target"></i> Разрешения </a>
                        </li>
                        <li>
                            <a href="<?= \yii\helpers\Url::to(['/rbac/route'])?>">
                                <i class="icon-directions"></i> Маршруты </a>
                        </li>
                        <li>
                            <a href="<?= \yii\helpers\Url::to(['/rbac/rule'])?>">
                                <i class="icon-pointer"></i> Правила </a>
                        </li>
                    </ul>
                </li>
            </ul>
        <?php endif; ?>
        <?php if (!Yii::$app->user->isGuest && Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId())['manager']->name == 'manager'): ?>
            <div class="note note-warning  pull-left" style="margin-top: 0px;">Контент-менеджер</div>
        <?php endif; ?>
        <?php if (!Yii::$app->user->isGuest && Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId())['user']->name == 'user'): ?>
            <div class="note note-success  pull-left" style="">Пользователь</div>
        <?php endif; ?>
        <?php if (!Yii::$app->user->isGuest && Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId())['redactor']->name == 'redactor'): ?>
            <div class="note note-info  pull-left" style="background-color: #8E44AD;color: white;">Редактор-сайта</div>
        <?php endif; ?>
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN INBOX DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

<!--                <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">-->
<!--                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">-->
<!--                        <i class="icon-envelope-open"></i>-->
<!--                        <span class="badge badge-default">--><?php //echo $countmessage;?><!--</span>-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li class="external">-->
<!--                            <h3>У вас-->
<!--                                <span class="bold">--><?php //echo $countmessage;?><!-- новых</span> Сообщении</h3>-->
<!--                            <div class="pull-right" style="font-size: 12px;"><a href="app_inbox.html">посмотреть все</a></div>-->
<!---->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                                <span class="photo">-->
<!--                                                    <img src="/../backend/web/img/avatar1.jpg" class="img-circle" alt=""> </span>-->
<!--                                        <span class="subject">-->
<!--                                                    <span class="from"> Lisa Wong </span>-->
<!--                                                    <span class="time">Just Now </span>-->
<!--                                                </span>-->
<!--                                        <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                                <span class="photo">-->
<!--                                                    <img src="/../backend/web/img/avatar3.jpg" class="img-circle" alt=""> </span>-->
<!--                                        <span class="subject">-->
<!--                                                    <span class="from"> Richard Doe </span>-->
<!--                                                    <span class="time">16 mins </span>-->
<!--                                                </span>-->
<!--                                        <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                                <span class="photo">-->
<!--                                                    <img src="/../backend/web/img/avatar1.jpg" class="img-circle" alt=""> </span>-->
<!--                                        <span class="subject">-->
<!--                                                    <span class="from"> Bob Nilson </span>-->
<!--                                                    <span class="time">2 hrs </span>-->
<!--                                                </span>-->
<!--                                        <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                                <span class="photo">-->
<!--                                                    <img src="/../backend/web/img/avatar3.jpg" class="img-circle" alt=""> </span>-->
<!--                                        <span class="subject">-->
<!--                                                    <span class="from"> Lisa Wong </span>-->
<!--                                                    <span class="time">40 mins </span>-->
<!--                                                </span>-->
<!--                                        <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                                <span class="photo">-->
<!--                                                    <img src="/../backend/web/img/avatar3.jpg" class="img-circle" alt=""> </span>-->
<!--                                        <span class="subject">-->
<!--                                                    <span class="from"> Richard Doe </span>-->
<!--                                                    <span class="time">46 mins </span>-->
<!--                                                </span>-->
<!--                                        <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
                <!-- END INBOX DROPDOWN -->
                <?php if (Yii::$app->user->isGuest): ?>
                <?php else: ?>
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

                            <span class="username username-hide-on-mobile" style="text-transform: uppercase;" > <? echo Yii::$app->user->identity->username?> </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="page_user_profile_1.html">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <?=
                                $menuItems[] = '<li>'
                                    . Html::beginForm(['/site/logout'], 'post')
                                    . Html::submitButton(
                                        'Выйти (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-danger ',
                                            'style' => [
                                                'width' => '100%',
                                            ]
                                        ]
                                    )
                                    . Html::endForm()
                                    . '</li>'
                                ?>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                <?php endif; ?>

            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <?php if (Yii::$app->user->isGuest) :?>
            elbek
        <?php else: ?>
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <li class="sidebar-toggler-wrapper hide">
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <div class="sidebar-toggler">
                            <span></span>
                        </div>
                        <!-- END SIDEBAR TOGGLER BUTTON -->
                    </li>
                    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                    <li class="sidebar-search-wrapper">
                        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                        <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                        <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->

                        <!-- END RESPONSIVE QUICK SEARCH FORM -->
                    </li>
                    <li class="nav-item start <?php echo $active?> ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">Уведомления <?php echo $active?></span>
                           <div class="inline">
                               <span class="badge badge-info">8</span>
                           </div>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item start active ">
                                <a href="<?= \yii\helpers\Url::to(['/customer/'])?>" class="nav-link ">
                                    <i class="icon-star"></i>
                                    <span class="title">Заказ от сайта</span>

                                </a>
                            </li>
                        </ul>
                    </li>


                    <?php if($this->title == 'Категория'): ?>
                    <li class="nav-item start active">
                        <a href="<?= \yii\helpers\Url::to(['/category/'])?>" class="nav-link ">
                            <i class="icon-layers"></i>
                            <span class="title">Категория</span>
                        </a>
                    </li>
                    <?php else:?>
                        <li class="nav-item start ">
                            <a href="<?= \yii\helpers\Url::to(['/category/'])?>" class="nav-link ">
                                <i class="icon-layers"></i>
                                <span class="title">Категория</span>
                            </a>
                        </li>
                    <?php endif; ?>



                    <?php if($this->title == 'Продукты'): ?>
                    <li class="nav-item start active ">
                        <a href="<?= \yii\helpers\Url::to(['/products/'])?>" class="nav-link ">
                            <i class="icon-wallet"></i>
                            <span class="title">Продукты</span>
                        </a>
                    </li>
                    <?php else:?>
                    <li class="nav-item start ">
                        <a href="<?= \yii\helpers\Url::to(['/products/'])?>" class="nav-link ">
                            <i class="icon-wallet"></i>
                            <span class="title">Продукты</span>
                        </a>
                    </li>
                    <?php endif; ?>





                    <?php if (!Yii::$app->user->isGuest && Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId())['admin']->name == 'admin'): ?>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title">Для администратора</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="<?= \yii\helpers\Url::to(['/gii/'])?>" class="nav-link ">
                                    <i class="icon-globe"></i>Генератор (GII)</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= \yii\helpers\Url::to(['/rbac/user'])?>" class="nav-link ">
                                    <i class="icon-users"></i>Пользователи
                                    <span class="badge badge-success"><?php echo $count;?></span>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="<?= \yii\helpers\Url::to(['/rbac/assignment'])?>" class="nav-link ">
                                    <i class="icon-link"></i>Назначение</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= \yii\helpers\Url::to(['/rbac/role'])?>" class="nav-link ">
                                    <i class="icon-fire"></i>Роли</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= \yii\helpers\Url::to(['/rbac/permission'])?>" class="nav-link ">
                                    <i class="icon-target"></i>Разрешения</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= \yii\helpers\Url::to(['/rbac/route'])?>" class="nav-link ">
                                    <i class="icon-directions"></i>Маршруты</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= \yii\helpers\Url::to(['/rbac/rule'])?>" class="nav-link ">
                                    <i class="icon-pointer"></i>Правила</a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>

                </ul>

                <!-- END SIDEBAR MENU -->
                <!-- END SIDEBAR MENU -->
            </div>
        <?php endif; ?>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->

            <!-- END THEME PANEL -->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">

                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Действия
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">
                                    <i class="icon-bell"></i> Действия</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-shield"></i> Another action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> Something else here</a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="#">
                                    <i class="icon-bag"></i> Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->

            <div class="">

                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>

                <?php

                ?>

                <?= Alert::widget() ?>
                <?= $content ?>











            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTAINER -->













<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2019 Разработано MD.UZ
        <a href="tel:+998998872570" title="Исмомлов Элбек Веб разработчик +998(99)887-25-70" target="_blank">Заказать сайт</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>

<!--<script src="/../backend/web/js/global/js.cookie.js" type="text/javascript"></script>-->
<!--<script src="/../../backend/web/js/global/jquery.min.js" type="text/javascript"></script>-->
<script>
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).siblings('.panel-heading').addClass('active');
    });

    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).siblings('.panel-heading').removeClass('active');
    });
</script>
<script>
    (function() {

        function Slideshow( element ) {
            this.el = document.querySelector( element );
            this.init();
        }

        Slideshow.prototype = {
            init: function() {
                this.wrapper = this.el.querySelector( ".slider-wrapper" );
                this.slides = this.el.querySelectorAll( ".slide" );
                this.previous = this.el.querySelector( ".slider-previous" );
                this.next = this.el.querySelector( ".slider-next" );
                this.index = 0;
                this.total = this.slides.length;
                this.timer = null;

                this.action();
                this.stopStart();
            },
            _slideTo: function( slide ) {
                var currentSlide = this.slides[slide];
                currentSlide.style.opacity = 1;

                for( var i = 0; i < this.slides.length; i++ ) {
                    var slide = this.slides[i];
                    if( slide !== currentSlide ) {
                        slide.style.opacity = 0;
                    }
                }
            },
            action: function() {
                var self = this;
                self.timer = setInterval(function() {
                    self.index++;
                    if( self.index == self.slides.length ) {
                        self.index = 0;
                    }
                    self._slideTo( self.index );

                }, 6000);
            },
            stopStart: function() {
                var self = this;
                self.el.addEventListener( "mouseover", function() {
                    clearInterval( self.timer );
                    self.timer = null;

                }, false);
                self.el.addEventListener( "mouseout", function() {
                    self.action();

                }, false);
            }


        };

        document.addEventListener( "DOMContentLoaded", function() {

            var slider = new Slideshow( "#main-slider" );

        });


    })();
    $('#exampleSlider').multislider();

    <!-- Initialize with options, if needed -->
    $('#exampleSlider').multislider({
        interval:5000,
        slideAll:true
    });
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
