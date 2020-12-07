<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Products */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<!-- content -->
    <?php if($model->status == 1): ?>
    <section id="prod-card">
        <div class="container">
            <div class="row prod-card">
                <div class="col-sm-5 prod-images">
                    <div class="swiper-container gallery-top white-bg">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide in_hover_zoom zoom">
<!--                                <img class="for_img_add_to_cart" src='../../uploads/product/images/DaNw--_Vd966ZkG0mRSCx1qWfSn0tS4K.png' data-zoom="/uploads/product/images/DaNw--_Vd966ZkG0mRSCx1qWfSn0tS4K.png">-->
                                <?php echo Html::img('@web/img/'.$model->image, [
                                        'class' => 'for_img_add_to_cart',
                                    'style'=>[
                                            'width' => '100%',
                                             'height' => '500px'
                                    ]
                                    ]) ?>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                    </div>
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide white-bg" style="background-image:url(../../uploads/product/images/DaNw--_Vd966ZkG0mRSCx1qWfSn0tS4K.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 prod-info">
                    <div class="prod-title mb-3">
                        <h1><?php  echo $model->name?></h1>
                    </div>
                    <div class="prod-code mb-3">
                        <span>Код № <?php  echo $model->number?></span>
                    </div>
                    <div class="prod-old-price mb-3">
                        <del></del>
                    </div>
                    <div class="prod-price mb-3">
                        <span><?php  echo $model->price?></span>
                    </div>
                    <div class="prod-installment mb-3">
                    <span class="or-installment">
                        или по 502 762&nbsp;сум UZS на 12 мес.
                    </span>
                    </div>
                    <div class="are-available mb-5">
                        <span>Есть в наличии</span><br>
                        <div class="counter2-container mt-2">
                            <div id="number-spinner" class="number-spinner" min="1" max="10" step="1"></div>
                        </div>
                    </div>
                    <div class="prod-buttons mb-3">
                        <a class="btn" href="<?= \yii\helpers\Url::to(['customer/create/?id=' . $model['id']])?>">Купить</a>
                        <button class="btn showInstallmentModal " data-item="1123" data-href="/installment/group/index/1123" title="Купить в рассрочку">
                            Рассчитать в рассрочку
                        </button>
                        <button type="button" class="btn add-to-cart w3ls-cart other_to_cart" data-product="1123"><i class="fal fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif;?>




<section id="product-description" class="white-bg">
    <div class="container">
        <div class="prod-desc mt-5 mb-5">
            <div class="title-div" >
                <a class="nav-link active" id="tech-specifications-tab" data-toggle="tab" href="#tech-specifications" role="tab" aria-controls="tech-specifications" aria-selected="true">Техническая характеристика</a>
            </div>
            <div class="nav nav-tabs mb-3 " id="nav-tab" role="tablist">
                <ul class="list-for-ajax-front list-group list-group-horizontal-sm">
                    <li class="list-item  active">
                        <a href="<?= \yii\helpers\Url::to(['products/'])?>">Все</a>
                    </li>
                    <li class="list-item ">
                        <a class="active" id="tech-specifications-tab" data-toggle="tab" href="#tech-specifications" role="tab" aria-controls="tech-specifications" aria-selected="true">Техническая характеристика</a>
                    </li>
                    <li class="list-item ">
                        <a class="" id="prod-desc-tab" data-toggle="tab" href="#prod-desc" role="tab" aria-controls="prod-desc" aria-selected="false">Описание товара</a>
                    </li>

                </ul>

            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tech-specifications" role="tabpanel" aria-labelledby="tech-specifications-tab">

                </div>
                <div class="tab-pane fade" id="prod-desc" role="tabpanel" aria-labelledby="prod-desc-tab">
                    <button class="btn btn-danger">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi aspernatur cupiditate ea id incidunt ipsam laboriosam laborum libero, magni molestias, nesciunt odio perspiciatis, placeat provident quod veritatis vitae. Alias aliquid amet architecto aspernatur consequatur cumque, deleniti deserunt dignissimos dolor dolorem earum eius eos et facilis harum labore laboriosam minima, molestiae nemo nihil nobis nulla odit officia quae quaerat quia reiciendis, rem tempora veniam voluptas? A assumenda blanditiis culpa, debitis doloremque eum laboriosam necessitatibus nisi? A accusamus commodi culpa dicta dolorem eius in inventore itaque, maxime minima omnis perferendis perspiciatis reprehenderit sequi sunt! Eaque, eius rerum? Aperiam aut quo sit!</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="info-product-for-buy">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="d-flex flex-row align-items-center bd-highlight">
                    <div class="bd-highlight">
                        <div class="banner-bottom-icons">
                            <img src="../../themes/store/img/svg/troley_1.svg" alt="">                        </div>
                    </div>
                    <div class="p-4 bd-highlight">
                        <div class="banner-bottom-txt">
                            <p>
                                БЕСПЛАТНАЯ ДОСТАВКА ПО ВСЕЙ РЕСПУБЛИКЕ ЗА 24 ЧАСА                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="d-flex flex-row align-items-center bd-highlight">
                    <div class="bd-highlight">
                        <div class="banner-bottom-icons">
                            <img src="../../themes/store/img/svg/credit_card_2.svg" alt="">                        </div>
                    </div>
                    <div class="p-4 bd-highlight">
                        <div class="banner-bottom-txt">
                            <p>
                                моментальная ОПЛАТА БЕЗ РЕГИСТРАЦИИ и комисии                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="d-flex flex-row align-items-center bd-highlight">
                    <div class="bd-highlight">
                        <div class="banner-bottom-icons">
                            <img src="../../themes/store/img/svg/calendar_3.svg" alt="">                        </div>
                    </div>
                    <div class="p-4 bd-highlight">
                        <div class="banner-bottom-txt">
                            <p>
                                мгновенный скоринг и рассрочка на любой товар                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="similar-products" class="white-bg mb-5">
    <div class="container">
        <div class="product-by-front-ajax">
            <div class="title-div">
                <h3>Похожие товары</h3>
            </div>
            <div class="product-slider">
                <div class="swiper-container swiper-product-popular">
                    <div class="swiper-wrapper">
                        <?foreach ($similar_items as $similar_item):?>
                        <div class="swiper-slide">

                            <div class="product-card">
                                <div class="product-stickers">
                                    <div class="d-flex bd-highlight">
                                        <div class="flex-grow-1 bd-highlight">
                                            <span class="installment-sticker">Рассрочка</span>
                                        </div>
                                        <div class="bd-highlight discount-sticker pr-2">
                                            <img class="img-responsive sticker_icon"  src="/img/svg/delivery.svg"  alt="Delivery">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-card-inner">
                                    <div class="prod-img">
                                        <a href="<?= \yii\helpers\Url::to(['products/view/?id=' . $similar_item['id']])?>">
                                            <?php echo Html::img('@web/img/'.$similar_item->image, ['class' => 'img-responsive']) ?>
                                        </a>
                                    </div>
                                    <div class="prod-name pt-3">
                                        <h3><a href="<?= \yii\helpers\Url::to(['products/view/?id=' . $similar_item['id']])?>"><?php echo $similar_item->name ?></a></h3>
                                    </div>

                                    <div class="prod-cost">
                                        <span class="price"><?php echo $similar_item->price ?><span class="sht"> / шт</span></span>
                                        <!--                        <span class="or-installment">или по --><!-- UZS на 12 мес.</span> -->
                                        <!--TODO Installment dynamic and widget-->
                                    </div>
                                    <div class="prod-buttons"> <!--TODO Купить в один клик -->
                                        <div class="d-flex bd-highlight">
                                            <div class="w-100 bd-highlight">
                                                <a href="<?= \yii\helpers\Url::to(['customer/create/?id=' . $similar_item['id']])?>">Купить</a>
                                            </div>
                                            <div class="flex-shrink-1 bd-highlight ml-2">
                                                <button type="button" class="add-to-cart w3ls-cart" data-product="1119">
                                                    <i class="fal fa-shopping-cart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <button type="button" class="buy-installments showInstallmentModal" title="Купить в рассрочку" data-item="1119" data-href="/installment/group/index/1119">Рассчитать в рассрочку</button>
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
</section>




</section>





<!-- //content -->
