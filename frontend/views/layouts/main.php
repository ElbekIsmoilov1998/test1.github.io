<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\Category;


$categories = Category::find()->all();

$maincategories = Category::find()->where(['parent_id' => '0'])->all();


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="интернет магазин в ташкенте, бытовая техника в ташкенте">
    <meta name="description" content="​При покупке бытовой техники в Ташкенте мы рекомендуем вам ознакомиться с широким ассортиментом представленным в нашем интернет-магазине PRIZMA.UZ.">
    <meta property="og:site_name" content="PRIZMA.UZ">
    <meta property="og:title" content="Интернет-магазин PRIZMA.UZ | Бытовая техника и электроника с доставкой по Ташкенту">
    <meta property="og:locale" content="ru">
    <meta property="og:type" content="page">
    <meta property="og:url" content="https://prizma.uz">
    <meta property="og:image" content="https://prizma.uz/uploads/logo/logomain.svg">
    <meta property="og:description" content="​При покупке бытовой техники в Ташкенте мы рекомендуем вам ознакомиться с широким ассортиментом представленным в нашем интернет-магазине PRIZMA.UZ.">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
<!--    <script>window.typeahead_3fe4d359 = {"highlight":true,"minLength":2};-->
<!--    </script>-->
    <?php $this->head() ?>
</head>
<body>

<!-- header -->
<span class="category-overlay"></span>
<noindex>
    <header>
        <div id="fixed-margin" class="container">

        </div>
        <div id="fixed-header">
            <div class="container">
                <div class="logo-search-card-section">
                    <div class="d-sm-flex bd-highlight">
                        <div class="bd-highlight">
                            <a class="navbar-brand" href="<?= \yii\helpers\Url::to(['site/index'])?>"><img class="navbar-brand-img" src="/img/logomain.svg" alt="logo"></a>                        </div>
                        <div class="flex-grow-1 bd-highlight align-self-center">
                            <form class="my-form-search" action="/product/search" method="get">
                                <div class="tt-scrollable-menu">
                                    <input type="search" id="w4" class="form-control pr-5" name="text" placeholder="Поиск товаров" required="" autocomplete="off" style="height: auto;border-radius: 0;" data-krajee-typeahead="typeahead_3fe4d359">
                                </div>
                                <button type="submit" class="search_product_header"><img src="/img/svg/search_btn.svg" alt="Search"></button>
                            </form>                        </div>
                        <div class="bd-highlight align-self-center ml-5">
                            <div class="main-cart btn-group">
                                <input type="hidden" id="cart_link" value="/customer/add-to-cart">
                                <div class="overlay">
                                    <div class="spinner"></div>
                                </div>
                                <div id="pjax_header_cart" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="1000">
                                    <div class="header-cart">
                                        <a class="bask_link" href="customer/basket.html" data-pjax="0"><span class="cart-icon"><i class="fal fa-shopping-cart"></i></span><span class="cart-txt">Корзина</span></a>        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section id="main-product-menu" class="container-fluid">
                <div class="container">
                    <nav id="catalog-product-menu" class="navbar navbar-expand-lg pl-0 pr-0">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item cotalog_dropdown d-flex align-items-center mr-3">
                                <a class="nav-link catalog-item dropdown-toggle" href="#" role="button" id="dropdownCatalogMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fal fa-bars"></i>Каталог товаров
                                </a>
                                <div id="products-menu" class="product-list dropdown-menu" aria-labelledby="dropdownCatalogMenuLink">
                                    <ul class="list-group">
                                      <?foreach ($categories as $category):?>
                                       <?php if($category->parent_id == 0):?>
                                        <li class="list-group-item item-167">
                                            <a>
                                                <i class="<?php echo $category->icons?>"> </i><?php $elbek = $category->id;?><?php echo $category->name?>
                                            </a>
                                            <div class="submenu">
                                                <div class="row">
                                                    <div class="col-sm-7">
                                                        <?php if ( !empty( $category->name) ):?>
                                                        <ul class="submenu-content cd-secondary-dropdown is-hidden">
                                                            <?foreach ($categories as $category):?>
                                                                 <?php if($elbek == $category->parent_id):?>
                                                                        <li class="intto_li mb-3 item-176"><a href="<?= \yii\helpers\Url::to(['products/bycategory/?id=' . $category['id']])?>"><?php echo $category->name?></a></li>
                                                                <?php endif; ?>
                                                            <?php endforeach;?>
                                                        </ul>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="img-100-auto">
                                                            <img class="" src="uploads/ОК/Каталог товаров главная 400-400 WEBP/1-telefony-i-plansety.webp" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                          <?php endif; ?>
                                        <?php endforeach;?>
                                     </ul>
                                </div>

                            </li>
                        </ul>
                        <a class="pl-2 text-white font-weight-bolder main-phone" href="tel:+998998872570"><i class="fal fa-phone-alt"></i> +998 99 887 25 70</a>
                    </nav>
                </div>
            </section>
        </div>
    </header>
</noindex>
<!-- //header -->

<?php $this->beginBody() ?>



<div class="container">
    <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

    <?= $content ?>


</div>





<!-- footer -->
<footer>
    <div class="first_footer">
        <div class="container">
            <div class="row has-flex-center">
                <div class="col-sm-2">
                    <img src="/img/svg/footer_price_cut.svg" alt="">                </div>
                <div class="col-sm-6">
                    <div class="text-white">
                        <h4 class="text-uppercase font-weight-bold">Узнавайте первым о скидках</h4>
                        <span>А также о новинках, акциях и специальных предложениях</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-subscribe text-right">
                        <form action="/">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Ваш E-Mail" aria-label="Ваш E-Mail" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary text-uppercase font-weight-bold" type="button" id="button-addon2">подписаться <i class="far fa-envelope"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second_footer">
        <div class="container">
            <div class="d-flex bd-highlight">
                <div class="p-2 bd-highlight">
                    <div class="logo-footer">
                        <a href="index.htm"><img src="/img/logofooter.svg" alt="logo"></a>                    </div>
                    <div class="all-rights">
                        <p>
                            <span class="text-white">Copyright © PRIZMA.UZ — Все права защищены.</span>
                        </p>
                    </div>
                </div>
                <div class="align-self-center w-100 p-2 bd-highlight">
                    <div class="text-right" id="navbarPayments">
                        <ul class="m-0 d-inline-block p-0"> <!--TODO Payments dynamic-->
                            <li class="nav-item ">
                                <img class="navbar-" src="/img/payments/payme.svg" alt="">
                            </li>
                            <li class="nav-item active">
                                <img class="navbar-" src="/img/payments/click.svg" alt="">
                            </li>
                            <li class="nav-item">
                                <img class="navbar-" src="/img/payments/visa.svg" alt="">
                            </li>
                            <li class="nav-item">
                                <img class="navbar-" src="/img/payments/master.svg" alt="">
                            </li>
                            <li class="nav-item">
                                <img class="navbar-" src="/img/payments/uzcard.svg" alt="">
                            </li>
                            <li class="nav-item">
                                <img class="navbar-" src="/img/payments/apelsin.svg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="align-self-center p-2 bd-highlight">
                    <nav class="navbar navbar-expand-lg row">
                        <div class="social-network">

                            <ul class="social-network navbar-nav mr-auto">
                                <li class="social-item">
                                    <a href="prizmauz.html" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-item">
                                    <a href="prizmauz/index.htm" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="social-item">
                                    <a href="https://t.me/prizmauz" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->


<!--modal-->
<div id="modalInstallment" class="modalInstallment modal" role="dialog" tabindex="-1" aria-hidden="true" aria-labelledby="modalInstallment-label">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div id="modalInstallmentHeader" class="modal-header">
                <h5 id="modalInstallment-label" class="title-orange-border text-bold text-uppercase modal-title"><span>Купить в рассрочку</span></h5>
                <button type="button" id="close-button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <div id='modalInstallmentContent' class="modalContent">
                    <div class="loading">
                        <div style="text-align:center">
                            <img src="public/images/loading.gif" alt="">        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!--//modal-->

<script>jQuery(function ($) {
        jQuery(document).pjax("#pjax_product_share a", {"push":false,"replace":false,"timeout":false,"scrollTo":false,"container":"#pjax_product_share"});
        jQuery(document).off("submit", "#pjax_product_share form[data-pjax]").on("submit", "#pjax_product_share form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":false,"replace":false,"timeout":false,"scrollTo":false,"container":"#pjax_product_share"});});
        jQuery(document).pjax("#pjax_product_popular a", {"push":false,"replace":false,"timeout":false,"scrollTo":false,"container":"#pjax_product_popular"});
        jQuery(document).off("submit", "#pjax_product_popular form[data-pjax]").on("submit", "#pjax_product_popular form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":false,"replace":false,"timeout":false,"scrollTo":false,"container":"#pjax_product_popular"});});
        jQuery("#w0").countdown("2020-11-01 17:45:00", function(e) {$(this).html(e.strftime("<span><b>%-D</b></span><span><b>:%H</b></span><span><b>:%M</b></span><span><b>:%S</b><span>"))}).on("finish.countdown", function(){location.reload()})
        jQuery("#w1").countdown("2020-11-01 17:45:00", function(e) {$(this).html(e.strftime("<span><b>%-D</b></span><span><b>:%H</b></span><span><b>:%M</b></span><span><b>:%S</b><span>"))}).on("finish.countdown", function(){location.reload()})
        jQuery("#w2").countdown("2020-11-01 17:40:00", function(e) {$(this).html(e.strftime("<span><b>%-D</b></span><span><b>:%H</b></span><span><b>:%M</b></span><span><b>:%S</b><span>"))}).on("finish.countdown", function(){location.reload()})
        jQuery("#w3").countdown("2020-11-01 17:40:00", function(e) {$(this).html(e.strftime("<span><b>%-D</b></span><span><b>:%H</b></span><span><b>:%M</b></span><span><b>:%S</b><span>"))}).on("finish.countdown", function(){location.reload()})
        jQuery(document).pjax("#pjax_product_hurry a", {"push":false,"replace":false,"timeout":false,"scrollTo":false,"container":"#pjax_product_hurry"});
        jQuery(document).off("submit", "#pjax_product_hurry form[data-pjax]").on("submit", "#pjax_product_hurry form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":false,"replace":false,"timeout":false,"scrollTo":false,"container":"#pjax_product_hurry"});});

        var mySwiper2 = new Swiper ("#owl-block-3", {
            loop: true,
            spaceBetween: 16,
            slidesPerView: 4,
            autoplay:{
                delay: 5000,
            },
            speed: 800,
            touchRatio: "false",
            simulateTouch: "false",
            breakpoints: {
                767: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                992: {
                    slidesPerView: 3,
                },
                1199: {
                    slidesPerView: 3,
                }
            },
            loop: false,
            navigation: {
                nextEl: "#owl-block-3+.btns_swiper .swiper-button-next",
                prevEl: "#owl-block-3+.btns_swiper .swiper-button-prev",
            },
        })


        var mySwiper3 = new Swiper (".owl-block-first", {
            loop: true,
            spaceBetween: 16,
            slidesPerView: 4,
            autoplay:{
                delay: 7000,
            },
            breakpoints: {
                767: {
                    slidesPerView: 2,
                    slidesPerColumn: 2,
                    spaceBetween: 10,
                    touchRatio: true,
                    simulateTouch: true,
                    freeMode: true,
                },
                992: {
                    slidesPerView: 3,
                    touchRatio: "false",
                    simulateTouch: "false",
                },
                1199: {
                    slidesPerView: 3,
                    speed: 800,
                    touchRatio: "false",
                    simulateTouch: "false",
                }
            },
            loop: false,
            navigation: {
                nextEl: ".owl-block-first+.btns_swiper .swiper-button-next",
                prevEl: ".owl-block-first+.btns_swiper .swiper-button-prev",
            },
        })

        var mySwiper3 = new Swiper ("#owl-block-d", {
            loop: true,
            spaceBetween: 16,
            slidesPerView: 4,
            autoplay:{
                delay: 5000,
            },
            speed: 800,
            touchRatio: "false",
            simulateTouch: "false",
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
                767: {
                    slidesPerView: 2,
                    slidesPerColumn: 2,
                    spaceBetween: 10,
                    touchRatio: true,
                    freeMode: true,
                    simulateTouch: true,
                },
                992: {
                    slidesPerView: 3,
                },
                1199: {
                    slidesPerView: 3,
                }
            },

            loop: false,
            navigation: {
                nextEl: "#owl-block-d+.btns_swiper .swiper-button-next",
                prevEl: "#owl-block-d+.btns_swiper .swiper-button-prev",
            },
        })


        var kb = new Swiper ("#kb", {
            loop: true,
            spaceBetween: 0,
            slidesPerView: 1,
            autoplay:{
                delay: 4000,
            },
            navigation: {
                nextEl: '#kb .swiper-button-next',
                prevEl: '#kb .swiper-button-prev',
            },
            pagination: {
                el: '#kb .swiper-pagination',
                type: 'bullets',
                clickable: true,
            },

        })

        if($(window).width() > 767){
            var mySwiper = new Swiper ("#owl-block-4", {
                loop: true,
                spaceBetween: 40,
                slidesPerView: 8,
                autoplay:{
                    delay: 3000,
                },
                speed: 800,
                touchRatio: false,
                simulateTouch: false,
                breakpoints: {
                    767: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    992: {
                        slidesPerView: 5,
                        spaceBetween: 30
                    },
                    1199: {
                        slidesPerView: 6,
                    }
                }
            })
        }
        if($(window).width() < 768){
            $('.home-page-posts').addClass('swiper-container');
            $('.home-page-posts .row').addClass('swiper-wrapper');
            $('.home-page-posts .row .col-sm-4').addClass('swiper-slide');

            $('div#owl-block-4').removeClass('swiper-container');
            $('div#owl-block-4>div').removeClass('swiper-wrapper').addClass('logos_n');
            $('div#owl-block-4>div>div').removeClass('swiper-slide').addClass('logos_inner');

            var wiper = new Swiper (".home-page-posts", {
                loop: false,
                spaceBetween: 11,
                slidesPerView: 'auto',
                autoplay:{
                    delay: 6000,
                },
                speed: 1000,
            })

//            $("#kb").swiperight(function() {
//                  $(this).carousel('prev');
//                });
//               $("#kb").swipeleft(function() {
//                  $(this).carousel('next');
//               });




        }

        jQuery&&jQuery.pjax&&(jQuery.pjax.defaults.maxCacheLength=0);
        var w4_data_1 = new Bloodhound({"datumTokenizer":Bloodhound.tokenizers.whitespace,"queryTokenizer":Bloodhound.tokenizers.whitespace,"remote":{"url":"/product/product-list?q=%QUERY","wildcard":"%QUERY"}});
        kvInitTA('w4', typeahead_3fe4d359, [{"display":"value","limit":1000,"name":"w4_data_1","source":w4_data_1.ttAdapter()}]);
        jQuery("#w4").on('typeahead:select', function(event, data) {
            location.href = "/product/view/" + data["key"];
        });
        jQuery(document).pjax("#pjax_header_cart a", {"push":true,"replace":false,"timeout":1000,"scrollTo":false,"container":"#pjax_header_cart"});
        jQuery(document).off("submit", "#pjax_header_cart form[data-pjax]").on("submit", "#pjax_header_cart form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":true,"replace":false,"timeout":1000,"scrollTo":false,"container":"#pjax_header_cart"});});
        jQuery('#modalInstallment').modal({"show":false,"keyboard":true});

        $(function(){
            var loading = $('#modalInstallment .loading').html();
            $(document).on('click', '.showInstallmentModal', function(e){
                e.preventDefault();
                $('#modalInstallment').find('#modalInstallmentContent').html(loading);
                //check if the modal is open. if it's open just reload content not whole modal
                //also this allows you to nest buttons inside of modals to reload the content it is in
                //the if else are intentionally separated instead of put into a function to get the
                //button since it is using a class not an #id so there are many of them and we need
                //to ensure we get the right button and content.

                if ($('#modalInstallment').data('bs.modal').isShown) {
                    $('#modalInstallment').find('#modalInstallmentContent')
                        .load($(this).attr('data-href'));
                    //dynamiclly set the header for the modal
                    // document.getElementById('modalInstallmentHeader').innerHTML = '<h5 class="text-center">' + $(this).attr('title') + '</h6>';

                    $('#installmentTab a').on('click', function (e) {
                        e.preventDefault();
                        $(this).tab('show');
                    })
                } else {
                    //if modal isn't open; open it and load content
                    $('#modalInstallment').modal('show')
                        .find('#modalInstallmentContent')
                        .load($(this).attr('data-href'));
                    //dynamiclly set the header for the modal
                    // document.getElementById('modalInstallmentHeader').innerHTML = '<h5 class="text-center">' + $(this).attr('title') + '</h6>';
                    $('#installmentTab a').on('click', function (e) {
                        e.preventDefault()
                        $(this).tab('show')
                    })
                }
                return false;
            });

        })

    });</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
