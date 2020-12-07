<?php

use common\models\Category;


$categories = Category::find()->all();

$maincategories = Category::find()->where(['parent_id' => '0'])->all();





?>

<div class="col-md-3 rsidebar">
    <div class="white-bg">
        <div class="closes_filter pt-4 pl-4 pr-4">
            <p class="text-uppercase fs-16 text-bold">Фильтры | <span>Результаты <span class="text-primary">51</span></span></p>
        </div>

        <div class="rsidebar-top pl-4 pr-4">
            <form id="filter-form" action="/product/category/bytovaa_tehnika" method="get" data-pjax="">
                <!--                            <div class="sidebar-row">-->
                <!--                                <h4 class="text-uppercase fs-16 text-bold filter-collapse-btn" data-toggle="collapse" data-target="#collapseRangePrice" aria-expanded="true" aria-controls="collapseRangePrice">-->
                <!--                                    Цена, uzs-->
                <!--                                </h4>-->
                <!--                                <div class="collapse show" id="collapseRangePrice">-->
                <!--                                    <div class="range-price-tooltip">-->
                <!--                                        <span id="pricerange_tooltip"></span>-->
                <!--                                    </div>-->
                <!--                                    <div class="row">-->
                <!--                                        <div class="col">-->
                <!--                                        <span class="form-control disabled" id="price_mini">-->
                <!--                                            2 089                                        </span>-->
                <!--                                        </div>-->
                <!--                                        <div class="col">-->
                <!--                                        <span class="form-control disabled" id="price_maxi">-->
                <!--                                            5 014 560                                        </span>-->
                <!--                                        </div>-->
                <!--                                    </div>-->
                <!--                                    <div id="pricerange-container"></div><input type="hidden" id="pricerange">                                    <input type="hidden" id="pricemin" name="price_min" value="2089.4">                                    <input type="hidden" id="pricemax" name="price_max" value="5014560">                                </div>-->
                <!--                            </div>-->
                <!--                            <hr>-->
                <?php foreach ($categories as $category):?>
                <?php if($category->parent_id == 0):?>
                        <hr>
                <div class="sidebar-row">
                    <h4 class="text-uppercase fs-16 text-bold filter-collapse-btn" data-toggle="collapse" data-target="#collapse<?php echo $category->id?>" aria-expanded="false" aria-controls="collapse<?php echo $category->id?>">
                        <?php echo $category->name?><?php $elbek = $category->id;?>
                    </h4>
                    <div class="collapse " id="collapse<?php echo $category->id?>">
                        <?php if ( !empty( $category->name) ):?>
                        <ul class="faq">
                            <?foreach ($categories as $category):?>
                                 <?php if($elbek == $category->parent_id):?>
                                      <li><a href="<?= \yii\helpers\Url::to(['products/bycategory/?id=' . $category['id']])?>" data-pjax="0"><?php echo $category->name?></a></li>
                                 <?php endif; ?>
                            <?php endforeach;?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>

                 <?php endif; ?>
                <?php endforeach;?>

                <div class="form-group bty">
                    <a class="btn btn-default" href="bytovaa_tehnika.html">Сбросить фильтр</a>                                <button type="submit" class="btn btn-default product-filter">Показать</button>                            </div>

            </form>
        </div>
    </div>
</div>
