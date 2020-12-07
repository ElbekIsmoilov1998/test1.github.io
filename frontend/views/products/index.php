<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Category;



/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = 'Все товары / ' . $this->title;
?>
<div class="products-index">

    <!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
</div>

<!-- products -->
<div class="container">
    <div class="filter-container">
        <!--        <h2>--><!--</h2>-->
        <div class="row">
            <!--            <div class="col-md-9">-->
            <!--                <div class="sidebar-row robbins">-->
            <!--                    <ul>-->
            <!--                        <li><a href="/product/category/bytovaa_tehnika?ribbon%5B0%5D=popularnye_tovary" data-pjax="0">Популярные товары</a></li>-->
            <!--                        <li><a href="/product/category/bytovaa_tehnika?ribbon%5B0%5D=specialnoe_predlozhenie" data-pjax="0">Специальное предложение</a></li>-->
            <!--                        <li><a href="/product/category/bytovaa_tehnika?ribbon%5B0%5D=uspejte_kupit" data-pjax="0">Успейте купить</a></li> -->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--            </div>-->


            <!--            <div class="col-md-3">-->
            <!--                <div class="prod_sort">-->
            <!--                    <div class="dropdown show">-->
            <!--                        <a class="btn white-bg dropdown-toggle w-100" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
            <!--                            Сортировать по-->
            <!--                        </a>-->
            <!---->
            <!--                        <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink">-->
            <!--                            <a class="dropdown-item" href="/product/category/bytovaa_tehnika?sort=price" data-pjax="1">цена по возрастанию</a> -->
            <!--                            <a class="dropdown-item" href="/product/category/bytovaa_tehnika?sort=-price" data-pjax="1">цена по убыванию</a>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <div class="col-md-12">
                <div><hr class="m-0 mb-3"></div>
            </div>


            <?php echo \Yii::$app->view->renderFile(Yii::getAlias('@app') . '/views/sidebar/sidebar.php'); ?>


            <div class="col-md-9">
                <div class="product-top">
                </div>
                <div class="products-row row">
                    <?foreach ($dataProvider as $category):?>
                        <div class="col-md-4 mb-4 product-grids">
                            <div class="agile-products for_parent_add_to_cart">

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
                                            <h3><a href="<?= \yii\helpers\Url::to(['products/view/?id=' . $category['id']])?>"><?php echo $category->name?></a></h3>
                                        </div>

                                        <div class="prod-cost">
                                            <span class="price text-lowercase"><?php echo $category->price ?><span class="sht"> / шт</span></span>
                                            <!--                        <span class="or-installment">или по --><!-- UZS на 12 мес.</span> -->
                                            <!--TODO Installment dynamic and widget-->
                                        </div>
                                        <div class="prod-buttons"> <!--TODO Купить в один клик -->
                                            <div class="d-flex bd-highlight">
                                                <div class="w-100 bd-highlight">
                                                    <a href="<?= \yii\helpers\Url::to(['customer/create/?id=' . $category['id']])?>">Купить</a>
                                                </div>
                                                <div class="flex-shrink-1 bd-highlight ml-2">
                                                    <button type="button" class="add-to-cart w3ls-cart" data-product="1169"><i class="fal fa-shopping-cart"></i></button>                                </div>
                                            </div>
                                            <button type="button" class="buy-installments showInstallmentModal" title="Купить в рассрочку" data-item="1169" data-href="/installment/group/index/1169">Рассчитать в рассрочку</button>                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>

                </div>
                <div class="products-pager">
                    <ul class="pagination"><li class="first disabled"><span><i class="fas fa-angle-double-left"></i></span></li>
                        <li class="prev disabled"><span><i class="fas fa-chevron-left"></i></span></li>
                        <li class="active"><a href="/product/category/bytovaa_tehnika?page=1" data-page="0">1</a></li>
                        <li><a href="/product/category/bytovaa_tehnika?page=2" data-page="1">2</a></li>
                        <li><a href="/product/category/bytovaa_tehnika?page=3" data-page="2">3</a></li>
                        <li class="next"><a href="/product/category/bytovaa_tehnika?page=2" data-page="1"><i class="fas fa-chevron-right"></i></a></li>
                        <li class="last"><a href="/product/category/bytovaa_tehnika?page=3" data-page="2"><i class="fas fa-angle-double-right"></i></a></li></ul>                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--//products-->