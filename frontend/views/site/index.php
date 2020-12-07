<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>

<!--SLIDER-->

<section id="main-product-list-and-banner">
    <div class="container">
        <div class="row">
            <!--            <div class="col-sm-3">-->
            <!--                <div class="product-list">-->
            <!--                    --><!--                </div>-->
            <!--            </div>-->
            <div class="col-sm-12">
                <div class="white-bg">
                    <div class="swiper-container swiper-banner">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="banner-item">
                                    <img class="img-responsive" src="/sliders/sssss.webp" alt="Быстрый и надежный платеж">                                                                                <div class="banner-text text-slider-left">
                                        <div class="b-text-inner">
                                            <h2 class="text-bold" style="color: #FEFEFE">Быстрый и надежный платеж</h2>
                                            <p style="color: #FEFEFE">Оплачивайте быстро и надежно  с помощью множества вариантов электронных платежей</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="banner-item">
                                    <img class="img-responsive" src="/sliders/dfg.webp" alt="Доставка до вашего дома">                                                                                <div class="banner-text text-slider-right">
                                        <div class="b-text-inner">
                                            <h2 class="text-bold" style="color: #FEFEFE">Доставка до вашего дома</h2>
                                            <p style="color: #FEFEFE">Заказывайте доставку во все регионы Узбекистана бесплатно

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-2"></div>
    </div>
</section>

<section id="info-product-for-buy">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="d-flex flex-row align-items-center bd-highlight">
                    <div class="bd-highlight">
                        <div class="banner-bottom-icons">
                            <img src="/img/svg/troley_1.svg" alt="">
                        </div>
                    </div>
                    <div class="p-4 bd-highlight">
                        <div class="banner-bottom-txt">
                            <p>
                                БЕСПЛАТНАЯ ДОСТАВКА ПО ВСЕЙ РЕСПУБЛИКЕ ЗА 24 ЧАСА
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="d-flex flex-row align-items-center bd-highlight">
                    <div class="bd-highlight">
                        <div class="banner-bottom-icons">
                            <img src="/img/svg/credit_card_2.svg" alt="">
                        </div>
                    </div>
                    <div class="p-4 bd-highlight">
                        <div class="banner-bottom-txt">
                            <p>
                                моментальная ОПЛАТА БЕЗ РЕГИСТРАЦИИ и комисии
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="d-flex flex-row align-items-center bd-highlight">
                    <div class="bd-highlight">
                        <div class="banner-bottom-icons">
                            <img src="/img/svg/calendar_3.svg" alt="">
                        </div>
                    </div>
                    <div class="p-4 bd-highlight">
                        <div class="banner-bottom-txt">
                            <p>
                                мгновенный скоринг и рассрочка на любой товар
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SLIDER-->


<!--Тренды лета-->





<section class="products-by-stock white-bg">
    <div class="container">
        <div class="product-by-front-ajax">
            <div class="title-div">
                <h2 class="">Специальное предложение</h2>
            </div>
            <div id="pjax_product_share" data-pjax-container="">
                <ul class="list-for-ajax-front list-group list-group-horizontal-sm">
                    <li class="list-item  active">
                        <a href="<?= \yii\helpers\Url::to(['products/'])?>">Все</a>
                    </li>
                    <?foreach ($main_categories as $main_category):?>
                    <li class="list-item ">
                        <a href="<?= \yii\helpers\Url::to(['products/bycategory/?id=' . $main_category['id']])?>"><?php echo $main_category->name?></a>
                    </li>
                    <? endforeach;?>
                </ul>
                <div class="product-slider">
                    <div class="swiper-container swiper-product-slider">
                        <div class="swiper-wrapper">
                            <?foreach ($dataProvider as $category):?>
                                <div class="swiper-slide">

                                    <div class="product-card">
                                        <div class="product-stickers">
                                            <div class="d-flex bd-highlight">
                                                <div class="flex-grow-1 bd-highlight">
                                                    <span class="installment-sticker">Рассрочка</span>
                                                </div>
                                                <div class="bd-highlight discount-sticker pr-2">
                                                    <img class="img-responsive sticker_icon" src="/img/svg/delivery.svg" alt="Delivery">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-inner">
                                            <div class="prod-img">
                                                <a href="<?= \yii\helpers\Url::to(['products/view/?id=' . $category['id']])?>">
                                                    <?php echo Html::img('@web/img/'.$category->image, ['class' => 'img-responsive']) ?>
                                                </a>
                                            </div>
                                            <div class="prod-name pt-3">
                                                <h3><a href="<?= \yii\helpers\Url::to(['products/view/?id=' . $category['id']])?>"><?php echo $category->name ?></a></h3>
                                            </div>

                                            <div class="prod-cost">
                                                <span class="new-price"><?php echo $category->price ?> / шт</span>
                                            </div>
                                            <div class="prod-buttons">
                                                <div class="d-flex bd-highlight">
                                                    <div class="w-100 bd-highlight">
                                                        <a href="<?= \yii\helpers\Url::to(['customer/create/?id=' . $category['id']])?>">Купить</a>
                                                    </div>
                                                    <div class="flex-shrink-1 bd-highlight ml-2">
                                                        <button type="button" class="add-to-cart w3ls-cart" data-product="1064"><i class="fal fa-shopping-cart"></i></button>
                                                    </div>
                                                </div>
                                                <button type="button" class="buy-installments showInstallmentModal" title="Купить в рассрочку" data-item="1064" data-href="/installment/group/index/1064">Рассчитать в рассрочку</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-btn-next"></div>
                    <div class="swiper-button-prev swiper-btn-prev"></div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--Тренды лета END-->


